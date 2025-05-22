<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request) {
        //return "admin login";

        //validation
        $validation = $request->validate([
            "name" => "required",
            
            "password" => "required"
        ]);
        $admin = Admin::where([
            'name' => $request->name,
            'password' => $request->password
        ])->first();
        //return $admin;
        if(!$admin) {
            $validation = $request->validate([
                "user" => "required",
                            
            ],[
                'user.required' => 'Please enter correct username',
                
            ]);
        }
        
        //return view('admin', ['name' => $admin->name]);
        //return $admin->name;
        Session::put('admin', $admin);
        return redirect('/dashboard');
    }

    function dashboard() {
       // return Session::get('admin');
        $admin = Session::get('admin');
        //return view('admin', ['name' => 'Admin']);
        //return view('admin', ['name' => $admin->name]);
        if($admin) {
            return view('admin', ['name' => $admin->name]);
        }
        else {
            return redirect('/admin-login');
        }
    }
}
