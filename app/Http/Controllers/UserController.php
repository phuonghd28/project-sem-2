<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function create(){
        return view('admin/user/form',['data'=>null]);
    }
    public function store(Request $request){
        $data = new User();
        $data->fill($request->all());
        $data->save();
        return redirect('admin/user/list');
    }

    public function list() {
        $data = User::all();
        return view('admin.user.table', ['list'=>$data]);
    }

    public function edit($id) {
        $data = User::find($id);
        return view('admin.user.form', ['data'=>$data]);
    }

    public function save() {}
}
