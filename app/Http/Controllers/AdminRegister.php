<?php

namespace App\Http\Controllers;

use App\Models\AdminRegisterModel;
use Illuminate\Http\Request;

class AdminRegister extends Controller
{
    //
    public function admin_register_post(Request $request){
        $register=new  AdminRegisterModel();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->password=bcrypt($request->password);
        // dd($register);
        $register->save();
        return view('admin.login.admin_login_index');

    }
}
