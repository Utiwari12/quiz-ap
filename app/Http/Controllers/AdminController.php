<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login(Request $request) {
        //return "admin login";
        return $request->input();
    }
}
