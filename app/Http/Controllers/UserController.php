<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function create(){
        return view('admin/user/form',['data'=>null]);
    }
    public function store(Request $request){
        $User = new user();
        $User->fill($request->all());
        $User->save();
        return redirect('admin/user/list');
    }

}
