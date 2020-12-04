<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\support\facades\Mail;
use App\Models\Reservation;

class mailController extends Controller
{
   /* function cusLogin(Request $req)
	{
		$email=$req->email;
	
		$session=Reservation::where('email',$email)->get();
		if(count($session)>0)
		{
			$req->session()->put('reservations_id',$session[0]->id);
			$req->session()->put('reservations_email',$session[0]->email);
			return redirect('/cusProfile');

		}
					else
				{
						return redirect('/login')->withErrors(['Invalid Credentials Please try After Some times!!', 'The Message']);
				}
		}*/
    public function sendEmail(Request $req)
    {
//$email=$req->email;
  //      $session=Reservation::where('email',$email)->get();
        $details=[
             'title' => 'mail from goalgappas',
             'body' =>'Your Reservation is confirmed..Thankyou for booking your table with us.
             For any changes please contact 
             +91 9746040561 or goalgappas@gmail.com']; 
            
             Mail::to('sreelakshmypp95@gmail.com')->send(new TestMail($details)) ;
           //  Mail::to('sruthydev29@gmail.com')->send(new TestMail($details)) ;
             //Mail::to('lakshmipriyapp007@gmail.com')->send(new TestMail($details)) ;
             //Mail::to('devakishoremj3@gmail.com')->send(new TestMail($details)) ;
             //Mail::to('lakshmysree19@gmail.com')->send(new TestMail($details)) ;
             return "Email sent";

		}
     public function create()
		{
			$req= new Reservation();
			
			return view('Reserve.create',compact('Reserve'));

		}
		public function store()
		{
			$req=Reservation::create($this->validatedData());
			Mail::to($req->email)->send(new TestMail());
			return redirect('/adminapprove/' .$req->id);
        }
        
    function index()
    {
     return view('send-email');
    }
}
