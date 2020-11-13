<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    //
    function AdminLogin(Request $req)
    {
        $data= $req->input();
        $req->session()->put('admin',$data['user']);
        echo session('admin');
    }
}
