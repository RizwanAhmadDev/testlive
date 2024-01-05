<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxi;
use Illuminate\Support\Facades\File;
class TaxiController extends Controller
{
    //
    public function Taxi()
    {
        $taxi = Taxi::all();
        return view('userview.taxi.Taxi', compact('taxi'));
    }

    public function addTaxi()
    {
        $taxi = Taxi::all();
        return view('userview.taxi.addTaxi', compact('taxi'));
    }


    public function insertTaxi(Request $request)
    {

        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'name' => 'required',
                'taxi_picture' => 'required',
            ];

            $CustomMessage = [
                'name.required' => 'name is required',
                'taxi_picture.required' => 'taxi_picture is required',

            ];
            $this->validate($request, $rules, $CustomMessage);


            $taxi = new Taxi;
            if($request->hasFile('taxi_picture'));
            {
                $image = $request->file('taxi_picture');
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->taxi_picture->move('assets/uploads/taxiimages', $imagename);
                $taxi->taxi_picture = $imagename;
            }
            $taxi->name = $request->name;
            $taxi->save();
            return redirect()->back()->with('status',"Taxi Added Successfully");
        }
        return view('userview.taxi.addTaxi');
    }


    public function editTaxi($id)
    {
        $taxi = Taxi::findOrFail($id);
        return view('userview.taxi.editTaxi', compact('taxi'));
    }


    public function updateTaxi(Request $request, $id)
    {
        $taxi = Taxi::findOrFail($id);
        $rules = [
            'taxi_picture' => 'required',
        ];

        $CustomMessage = [
            'taxi_picture.required' => 'Taxi Image is required',
        ];
        $this->validate($request, $rules, $CustomMessage);
        if($request->hasFile('taxi_picture'));
        {
            $destination = 'assets/uploads/taxiimages/'.$taxi->taxi_picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image = $request->file('taxi_picture');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->taxi_picture->move('assets/uploads/taxiimages', $imagename);
            $taxi->taxi_picture = $imagename;
        }
        $taxi->name = $request->name;
            $taxi->save();
        return redirect()->back()->with('status',"Taxi Updates Successfully");
    }


    public function deleteTaxi($id)
    {
        $taxi = Taxi::findOrFail($id);
        $taxi->delete();
        return redirect()->back()->with('status',"Taxi Updates Successfully");
    }
}
