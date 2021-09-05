<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('admin/users/form', ['data' => null]);
    }

    public function store(Request $request)
    {
        $validate= $request->validate([
            'username'=>'required|min:5|max:10',
            'phone'=>'required|min:9|max:10',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'email'=>'required',
            'address'=>'required',
            'last_name'=>'required|min:7|max:12',
            'first_name'=>'required|min:8|max:12'
        ],[
            'username.required'=>'vui lòng nhập tên đăng nhập ',
            'username.min'=>'ten dang nhap toi thieu 5 ki tu',
            'username.max'=>'ten dang nhap toi da 10 ki tu',

            'phone.required'=>'vui lòng nhập số điện thoại ',
            'phone.min'=>'ten dang nhap toi thieu 5 ki tu',
            'phone.max'=>'ten dang nhap toi da 10 ki tu',

            'password.required'=>'vui long nhap ten dang nhap',
            'password.confirmed'=>'mật khẩu không giống',

            'password_confirmation.required'=>'vui lòng xác nhận mật khẩu ',

            'email.required'=>'vui long nhập đúng định dạng @gmail.com',

            'address.required'=>'vui long nhập địa chỉ của bạn ',

            'last_name.required'=>'vui long nhập họ của bạn ',
            'last_name.min'=>'họ đăng nhập tối thiểu 7 kí tự ',
            'last_name.max'=>'họ đăng nhập tối đa 12 kí tự ',

            'first_name.required'=>'vui lòng nhập họ và tên của bạn ',
            'first_name.min'=>'họ đăng nhập tối thiểu 8 kí tự ',
            'first_name.max'=>'họ đăng nhập tối thiểu 12 kí tự ',

        ]);
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('listUser')->with(['status' => 'create user success']);
    }


    public function list(Request $request)
    {
        $queryBuilder = User::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $role = $request->get('role');

        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($role) {
            $queryBuilder = $queryBuilder->where('role', $role);
        }
        $user = $queryBuilder->paginate(10)->appends(['search' => $search, 'role' => $role]);

        return view('admin/users/table', [
            'list' => $user,
            'role' => $role,
            'sort' => $sort
        ]);

    }
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin/users/form',
            ['data' => $user]);
    }

    public function save($id, UserRequest $request)
    {
        $user = User::find($id);
        $data = $request->validated();
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        $user->save();
        return redirect()->route('listUser')->with(['status' => 'Update user success', 'user' => $user->username]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listUser')->with(['status' => 'Delete user success', 'user' => $user->username]);
    }


}
