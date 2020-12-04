<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Staff;

class staffController extends Controller
{
	function staffLogin(Request $req)
	{
		$email=$req->email;
		$password=$req->password;
		$session=Staff::where('email',$email)->where('password',$password)->get();
		if(count($session)>0)
		{
			$req->session()->put('staff_id',$session[0]->id);
			$req->session()->put('staff_name',$session[0]->name);
			return redirect('/staffProfile');

		}
		else
		{
			return redirect('/stafflogin')->withErrors(['Invalid Credentials Please try After Some times!!', 'The Message']);
		}
	}
		public function staffProfile(Request $req)
		{
			if($req->session()->get('staff_id')=="")
			{
				return redirect('/stafflogin');
			}
			else
			{
				$name=$req->session()->get('staff_name');
				$capsule=array('name'=>$name);
				return view('staffProfile')->with($capsule);
			}
		}
		
    function staffReg(Request $req)
	{
		$staff=new Staff;
		$staff->name=$req->txtName;
		$staff->address=$req->txtAddress;
        $staff->email=$req->txtEmail;
        $staff->designation=$req->designation;
		$staff->mobile=$req->txtContact;
		$staff->password=$req->txtPassword;
		//$staff->confirmpass=$req->txtCnfmpass;
		$staff->save();
		return redirect('staffregister');
	}
}
