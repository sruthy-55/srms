<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\Reservation;

class reservationController extends Controller
{
    function reserve(Request $req)
	{
		$reservation=new Reservation;
		$reservation->name=$req->txtName;
		$reservation->date=$req->txtdate;
		$reservation->time=$req->txtTime;
		$reservation->mobile=$req->txtContact;
		$reservation->email=$req->txtEmail;
		$reservation->num=$req->txtNum;
		$reservation->status;
	//	$customer->confirmpass=$req->txtConfmPassword;
		$reservation->save();
		return redirect('reservation');
	}
}	



