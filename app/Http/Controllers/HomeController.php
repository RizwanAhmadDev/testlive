<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Route;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function home_view()
    {
        $route = Route::all();


        $condition_1 = "3"; // replace with your condition
        $condition_2 = "4"; // replace with your condition
        $condition_3 = "5"; // replace with your condition
$star_3 = DB::table('hotels')->where('stars', $condition_1)->get();
$star_4 = DB::table('hotels')->where('stars', $condition_2)->get();
$star_5 = DB::table('hotels')->where('stars', $condition_3)->get();
                
        return view('userview.index', compact('star_3','star_4','star_5','route'));
    }

}
