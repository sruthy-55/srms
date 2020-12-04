<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Reservation;
use App\Models\Menuadd;

use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    function adminLogin(Request $req)
	{
		$email=$req->email;
		$password=$req->password;
		$session=Admin::where('email',$email)->where('password',$password)->get();
		if(count($session)>0)
		{
			$req->session()->put('admins_id',$session[0]->id);
			$req->session()->put('admins_email',$session[0]->email);
			return redirect('/adminhome');

		}
					else
				{
						return redirect('/adminlogin')->withErrors(['Invalid Credentials Please try After Some times!!', 'The Message']);
				}
		}
		public function adminhome(Request $req)
		{
			if($req->session()->get('admins_id')=="")
			{
				return redirect('/adminhome');
			}
			else
			{
				$name=$req->session()->get('admins_email');
				$capsule=array('name'=>$name);
				return view('adminhome')->with($capsule);
			}
		}
	Public function adminReserve()
	{
		//return DB::select("select *from reservations");
		$Reserve =Reservation:: all();

		return view('adminapprove',['reservations'=>$Reserve]);
		
	}
	/*public function approve($id){
       $Reserve = App\Models\Reservation::findOrFail($id);
        $Reserve->status='1'; //Approved
		$Reserve->save();
		return redirect('adminapproval');
	
	  //  return Redirect::to(route('adminapprove'));
	  
	 }*/
	 function approve(Request $req)
	 {
		 $id = $req->input('approve-btn');
		 
		 DB::table('reservations')->where('id', $id)->update(['status' => '1']);
		
		 
		 return redirect()->back()->withErrors(['The reservation Was Approved!!', 'The Message']);

	 }

     public function decline($id){
        $Reserve = App\Models\Reservation::findOrFail($id);
        $Reserve->status='0'; //Declined
		$Reserve->save();
		return redirect('adminapproval')->back()->with('alert','Rejected!');
       // return Redirect::to(route('adminapprove'));
	 }
	
	
		public function deletebtn(Request $req)
		{
			//$Reserve=Reservation::find($id);
			//$Reserve->delete();
			//return redirect('adminReserve');

				return redirect()->route('adminapprove')->with(['message'=> 'Wrong ID!!']);
			
			Reservation::destroy([8,2,3,4,5]);//to delete collection of ids
			return redirect('adminapprove');
		}
		public function create()
		{
			$Reserve= new Reservation();
			
			return view('Reserve.create',compact('Reserve'));

		}
		public function store()
		{
			$Reserve=Reservation::create($this->validatedData());
			Mail::to($Reserve->email)->send(new TestMail());
			return redirect('/adminapprove/' .$Reserve->id);
		}

//menu//


}