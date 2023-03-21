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

            if($request->formTaxi){
                $taxivalue=$request->formTaxi;              
            }
            else{
    $taxivalue="Don't need taxi";
}   
            if($request->formHotels){
                $hotelvalue=$request->formHotels;              
            }
            else{
    $hotelvalue="Don't need Hotel";
}   
            if($request->forTickets){
                $ticketsvalue=$request->forTickets;              
            }
            else{
    $ticketsvalue="Don't need ticket";
}   
            if($request->umrahpkg){
                $upackagevalue=$request->umrahpkg;              
            }
            else{
    $upackagevalue="Don't need taxi";
}   
$phone = str_replace([' ', '+'], '', $request->ph_nmbr);;
// dd($string);

        $enquiry= new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $phone;
        $enquiry->country = $request->countryname;
        $enquiry->british_citizen = $request->british_citizen;
        $enquiry->taxi = $taxivalue;
        $enquiry->hotel = $hotelvalue;
        $enquiry->ticket = $ticketsvalue;
        $enquiry->umrah_package = $upackagevalue;
        $enquiry->pickup = $request->pickup_addr;
        $enquiry->destination = $request->destination;
        $enquiry->save();

        // $data=$enquiry;
        $phone_send='https://wa.me/'.$phone;

        // dd($data);
            $data=[
                'name'=>$request->name,
                'email' => $request->email,
                'phone' => $phone_send,
                'country' => $request->countryname,
                'british_citizen' => $request->british_citizen,
                'taxi' => $taxivalue,
                'hotel' => $hotelvalue,
                'ticket' => $ticketsvalue,
                'umrah_package' => $upackagevalue,
                'pickup' => $request->pickup_addr,
                'destination' => $request->destination,
            ];

        // Enquiry::create($enquiry);
        // dd($data);
        Mail::to('rizahmaddev@gmail.com')->send(new EnquirySubmitted($data));
        // return redirect()->back()->with('success', 'Your enquiry has been submitted successfully. We will get in touch with you soon.');

        return redirect()->back()->with('status',"Enquiry Submitted Successfully");
        // }

    }

}
