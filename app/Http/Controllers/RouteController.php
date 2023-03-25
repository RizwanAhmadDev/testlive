<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Taxi;

class RouteController extends Controller
{
    //
    public function Route()
    {
        $route = Route::all();
        return view('userview.route.Route', compact('route'));
    }
    public function Route_frontend()
    {
        $car = Route::all();
        return view('userview.taxi', compact('car'));
    }

    public function addRoute()
    {
        $taxi = Taxi::all();
        $route = Route::all();
        return view('userview.route.addRoute', compact('taxi','route'));
    }


    public function insertRoute(Request $request)
    {

        if($request->isMethod('post')){
            $data = $request->all();
            // $rules = [
            //     'name' => 'required',
            //     'taxi_picture' => 'required',
            // ];

            // $CustomMessage = [
            //     'name.required' => 'name is required',
            //     'taxi_picture.required' => 'taxi_picture is required',
                
            // ];
            // $this->validate($request, $rules, $CustomMessage);

                // dd($request->taxi_id);
            $route = new Route;
            $route->name = $request->name;
            $route->price = $request->price;
            $route->currency = $request->currency;
            $route->taxi_id = $request->taxi_id;
            $route->save();
            return redirect()->back()->with('status',"Route Added Successfully");
        }
        return view('userview.route.addRoute');
    }


    public function editRoute($id)
    {
        $route = Route::findOrFail($id);
        return view('userview.route.editRoute', compact('route'));
    }


    public function updateRoute(Request $request, $id)
    {
        $route = Route::findOrFail($id);
        $route->name = $request->name;
        $route->price = $request->price;
        $route->currency = $request->currency;
        $route->taxi_id = $request->taxi_id;
        $route->save();
        return redirect()->back()->with('status',"Route Updates Successfully");
    }


    public function deleteRoute($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        return redirect()->back()->with('status',"Route Updates Successfully");
    }
}
