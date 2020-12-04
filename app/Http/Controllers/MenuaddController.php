<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menuadd;

class MenuaddController extends Controller
{
    function menu_add(Request $req)
	{
		$menuadd=new Menuadd;
		$menuadd->name=$req->txtName;
		$menuadd->description=$req->txtDesc;
		$menuadd->price=$req->price;
		$menuadd->status=$req->txtStatus;
		
		$menuadd->save();
		return redirect('menuadd');
	}
	function show()
    {
        $data= Menuadd::all();
        return view('viewaddmenu',['menuadds'=>$data]);
    }
}
