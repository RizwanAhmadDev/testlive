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
    public function all_vehicles()
    {
        $car = Route::all();
        return view('userview.taxi', compact('car'));
    }
    // public function sonata()
    // {
    //     $car = Route::all();
    //     return view('userview.Sonata', compact('car'));
    // }
    // public function gmc()
    // {
    //     $car = Route::all();
    //     return view('userview.GMC', compact('car'));
    // }
    // public function h1()
    // {
    //     $car = Route::all();
    //     return view('userview.H1', compact('car'));
    // }

    public function addRoute()
    {
        $taxi = Taxi::all();
        $route = Route::all();
        return view('userview.route.addRoute', compact('taxi','route'));
    }


    public function insertRoute(Request $request)
    {

        if($request->isMethod('post')){
            // $data = $request->all();
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
        $taxi = Taxi::all();
        return view('userview.route.editRoute', compact('route','taxi'));
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
