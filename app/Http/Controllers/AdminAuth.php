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
<<<<<<< HEAD
        
=======
>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
    }
}
