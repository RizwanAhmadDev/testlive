<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Mail\EnquirySubmitted;

class EnquiryController extends Controller
{
    //

    public function store_enquiry(Request $request)
    {
        // dd($request->all());

        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     $rules = [
        //         'name' => 'required',
        //         'email' => 'required',
        //         'phone' => 'required',
        //         'countryname' => 'required',
        //     ];

        //     $CustomMessage = [
        //         'name.required' => 'name is required',
        //         'email.required' => 'email is required',
        //         'phone.required' => 'phone number is required',
        //         'countryname.required' => 'country name is required',
        //     ];
        //     $this->validate($request, $rules, $CustomMessage);

        $enquiry= new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->ph_nmbr;
        $enquiry->country = $request->countryname;
        $enquiry->british_citizen = $request->british_citizen;
        $enquiry->taxi = $request->formTaxi;
        $enquiry->hotel = $request->formHotels;
        $enquiry->ticket = $request->forTickets;
        $enquiry->umrah_package = $request->umrahpkg;
        $enquiry->pickup = $request->pickup_addr;
        $enquiry->destination = $request->destination;
        $enquiry->save();
        // Enquiry::create($enquiry);
        // dd($enquiry);
        // Mail::to('rizahmaddev@gmail.com')->send(new EnquirySubmitted($enquiry));
        // return redirect()->back()->with('success', 'Your enquiry has been submitted successfully. We will get in touch with you soon.');

        return redirect()->back()->with('status',"Enquiry Submitted Successfully");
        // }

    }

}
