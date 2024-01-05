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
    $upackagevalue="Don't need package";
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
        $phone_wa='447999451002';
        // $phone_wa='923158192177';
         $customer_name =  $enquiry->name;
        $customer_phone =  $enquiry->phone;
        $messageData = array(
            'messaging_product' => "whatsapp",
            'to' => $phone_wa,
            'type' => "template",
            'template' => array("name"=> "form_submission",'language'=>array("code"=>"en_GB"),'components'=>
               array(array(
                "type" => "body",
                "parameters" => array(array("type"=> "text","text"=>  $customer_name),array("type"=> "text","text"=>  $customer_phone),))))
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://graph.facebook.com/v16.0/105626529156308/messages',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($messageData),
          CURLOPT_HTTPHEADER => array(
            'Authorization:  Bearer EAADzlOf0BN4BAGaLTFFZCEPnvDyaM8TcVEYBDcbr3vfzi662H6jiZAs2SmAXCt1KKCUyxXFO0l7CZA72BuHAZAcHZBwOXDU6TWkHQBOmBg37imqdzxhaaRBTQoJAOnMkqIvFaYGbQOTvZAPIerMhcp6CDRZAK0C8OKyICqlcqsnJF3wBZAAcjA17',
            'Content-Type: application/json'
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return redirect()->back()->with('status',"Enquiry Submitted Successfully");
        // }

    }
    public function sendwhatsapp(){
        // $url = "https://messages-sandbox.nexmo.com/v1/messages";
        // $params = ["to" => ["type" => "whatsapp", "number" => "923158192177"],
        //     "from" => ["type" => "whatsapp", "number" => "14157386102"],
        //     "message" => [
        //         "content" => [
        //             "text" => "Hello from Vonage and Laravel Please reply to this message with a number between 1 and 100"
        //         ]
        //     ]
        // ];
        // $headers = [
        //     "Authorization" => "Basic " . base64_encode(env('NEXMO_API_KEY') . ":" . env('NEXMO_API_SECRET')),
        //     "Content-Type" => "application/json",
        // ];
        

    
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        // dd($response);
        // $data = $response->getBody();
        // Log::Info($data);
    
        // return view('thanks');
//this code is working for whatsapp message
        
        // dd($phone);
        
    }

}
