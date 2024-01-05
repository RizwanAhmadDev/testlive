<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    //
    public function Hotel()
    {
        $hotel = Hotel::all();
        return view('userview.hotel.Hotel', compact('hotel'));
    }
    public function Hotel_frontend()
    {
        // $hotel = Hotel::all();
        $condition_1 = "3"; // replace with your condition
        $condition_2 = "4"; // replace with your condition
        $condition_3 = "5"; // replace with your condition
$star_3 = DB::table('hotels')->where('stars', $condition_1)->get();
$star_4 = DB::table('hotels')->where('stars', $condition_2)->get();
$star_5 = DB::table('hotels')->where('stars', $condition_3)->get();

        return view('userview.packages', compact('star_3','star_4','star_5'));
    }

    public function addHotel()
    {
        $hotel = Hotel::all();
        return view('userview.hotel.addHotel', compact('hotel'));
    }


    public function insertHotel(Request $request)
    {

        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'title' => 'required',
                'stars' => 'required',
                'nights_in_makkah' => 'required',
                'nights_in_madinah' => 'required',
                'hotel_image' => 'required',
                'price' => 'required',
            ];

            $CustomMessage = [
                'title.required' => 'Title is required',
                'stars.required' => 'stars are required',
                'nights_in_makkah.required' => 'nights_in_makkah are required',
                'nights_in_madinah.required' => 'nights_in_madinah are required',
                'price.required' => 'price are required',
                'hotel_image.required' => 'hotel_image is required',

            ];
            $this->validate($request, $rules, $CustomMessage);


            $hotel = new Hotel;
            if($request->hasFile('hotel_image'));
            {
                $image = $request->file('hotel_image');
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->hotel_image->move('assets/uploads/hotelimages', $imagename);
                $hotel->hotel_image = $imagename;
            }
            $hotel->title = $request->title;
            $hotel->stars = $request->stars;
            $hotel->nights_in_makkah = $request->nights_in_makkah;
            $hotel->nights_in_madinah = $request->nights_in_madinah;
            $hotel->price = $request->price;
            $hotel->save();
            return redirect()->back()->with('status',"Hotel Added Successfully");
        }
        return view('userview.hotel.addHotel');
    }


    public function editHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('userview.hotel.editHotel', compact('hotel'));
    }


    public function updateHotel(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $rules = [
            'hotel_image' => 'nullable|image',
        ];
    
        $customMessages = [
            'hotel_image.image' => 'The file must be an image.',
        ];
    
        $this->validate($request, $rules, $customMessages);
    
        $hotel->title = $request->title;
    
        if ($request->hasFile('hotel_image') && $request->file('hotel_image')->isValid()) {
            // If a new image is uploaded
            $destination = 'assets/uploads/hotelimages/' . $hotel->hotel_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
    
            $image = $request->file('hotel_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/uploads/hotelimages', $imageName);
            $hotel->hotel_image = $imageName;
        }
    
        $hotel->stars = $request->stars;
        $hotel->nights_in_makkah = $request->nights_in_makkah;
        $hotel->nights_in_madinah = $request->nights_in_madinah;
        $hotel->price = $request->price;
        $hotel->save();
    
        return redirect()->back()->with('status', "Hotel updated successfully");
    }
    


    public function deleteHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->back()->with('status',"Hotel Updates Successfully");
    }
}
