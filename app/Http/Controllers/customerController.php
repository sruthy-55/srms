<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
//use Illuminate\Database\Eloquent\Model;

class customerController extends Controller
{
	function cusLogin(Request $req)
	{
		$email=$req->email;
		$password=$req->password;
		$session=Customer::where('email',$email)->where('password',$password)->get();
		if(count($session)>0)
		{
			$req->session()->put('customers_id',$session[0]->id);
			$req->session()->put('customers_name',$session[0]->name);
			return redirect('/cusProfile');

		}
					else
				{
						return redirect('/login')->withErrors(['Invalid Credentials Please try After Some times!!', 'The Message']);
				}
		}
		public function cusProfile(Request $req)
		{
			if($req->session()->get('customers_id')=="")
			{
				return redirect('/login');
			}
			else
			{
				$name=$req->session()->get('customers_name');
				$capsule=array('name'=>$name);
				return view('cusProfile')->with($capsule);
			}
		}
		
		
	
	

	function cusReg(Request $req)
	{
		$customer=new Customer;
		$customer->name=$req->txtName;
		$customer->place=$req->txtPlace;
		$customer->email=$req->txtEmail;
		$customer->mobile=$req->txtContact;
		$customer->password=$req->txtPassword;
	//	$customer->confirmpass=$req->txtConfmPassword;
		$customer->save();
		return redirect('register');
	}
}	

