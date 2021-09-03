<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('admin/users/form', ['data'=>null]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->role = 2;
        $user->save();
        return redirect('/users');
    }


    public function list()
    {
        $list = User::all();
        return view('admin/users/table', ['list'=>$list]);

    }

    public function edit($id)
    {
        $update = User::find($id);

        return view('admin/users/form',
            ['data' => $update]);
    }

    public function save($id, Request $request)
    {
        $save = User::find($id);
        $save->update($request->all());
        $save->save();
        return redirect('/users');
    }

    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('/users');
    }

   
}
