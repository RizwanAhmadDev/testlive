<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TaxiController;
use App\Http\Controllers\HomeController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {    return view('userview.index');});
Route::get('/blogs', function () {    return view('userview.blogs');});
Route::get('/contact', function () {    return view('userview.contactus');});
// Route::get('/hotels', function () {    return view('userview.packages');});
Route::get('/about', function () {    return view('userview.aboutus');});
// Route::get('/taxi', function () {    return view('userview.taxi');});
Route::get('taxi', [RouteController::class,'Route_frontend'])->name('Route_frontend');
Route::get('hotels', [HotelController::class,'Hotel_frontend'])->name('Hotel_frontend');

Route::post('StoreEnquiry', [EnquiryController::class,'store_enquiry'])->name('store_enquiry');
Route::get('/', [HomeController::class,'home_view'])->name('home_view');
Route::get('whatsapp', [EnquiryController::class,'sendwhatsapp'])->name('sendwhatsapp');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




// Route::get('/editusers', function () {
//     return view('admin.editUsers');
// })->middleware(['auth', 'verified'])->name('editusers');



Route::middleware('auth')->group(function () {

    Route::get('Category', [CategoryController::class,'category'])->name('category');
    Route::get('Category/Add_Category', [CategoryController::class,'addcategory'])->name('addcategory');
    Route::post('Category/InserCategory',[CategoryController::class,'insertcategory'])->name('insertcategory');
    Route::get('editcategory/{id}',[CategoryController::class,'editcategory'])->name('editcategory');
    Route::post('updatecategory/{id}',[CategoryController::class,'updatecategory'])->name('updatecategory');
    Route::get('deletecategory/{id}',[CategoryController::class,'deletecategory'])->name('deletecategory');


    //hotels
    Route::get('Hotel/admin', [HotelController::class,'Hotel'])->name('Hotel');
    Route::get('Hotel/Add_Hotel', [HotelController::class,'addHotel'])->name('addHotel');
    Route::post('Hotel/InserHotel',[HotelController::class,'insertHotel'])->name('insertHotel');
    Route::get('editHotel/{id}',[HotelController::class,'editHotel'])->name('editHotel');
    Route::post('updateHotel/{id}',[HotelController::class,'updateHotel'])->name('updateHotel');
    Route::get('deleteHotel/{id}',[HotelController::class,'deleteHotel'])->name('deleteHotel');
    
    //taxi
    Route::get('taxi/admin', [TaxiController::class,'Taxi'])->name('Taxi');
    Route::get('Taxi/Add_Taxi', [TaxiController::class,'addTaxi'])->name('addTaxi');
    Route::post('Taxi/InserTaxi',[TaxiController::class,'insertTaxi'])->name('insertTaxi');
    Route::get('editTaxi/{id}',[TaxiController::class,'editTaxi'])->name('editTaxi');
    Route::post('updateTaxi/{id}',[TaxiController::class,'updateTaxi'])->name('updateTaxi');
    Route::get('deleteTaxi/{id}',[TaxiController::class,'deleteTaxi'])->name('deleteTaxi');
    
    //routes
    Route::get('Route/admin', [RouteController::class,'Route'])->name('Route');
    Route::get('Route/Add_Route', [RouteController::class,'addRoute'])->name('addRoute');
    Route::post('Route/InserRoute',[RouteController::class,'insertRoute'])->name('insertRoute');
    Route::get('editRoute/{id}',[RouteController::class,'editRoute'])->name('editRoute');
    Route::post('updateRoute/{id}',[RouteController::class,'updateRoute'])->name('updateRoute');
    Route::get('deleteRoute/{id}',[RouteController::class,'deleteRoute'])->name('deleteRoute');



    Route::get('Posts', [PostController::class,'Posts'])->name('posts');
    Route::get('Posts/addpost', [PostController::class,'addpost'])->name('addpost');
    Route::post('Posts/Insertpost',[PostController::class,'insertpost'])->name('insertpost');
    Route::get('Post/editpost/{id}',[PostController::class,'editpost']);
    Route::post('updatepost/{id}',[PostController::class,'updatepost']);
    Route::get('Post/deletepost/{id}',[PostController::class,'deletepost'])->name('deletepost');


    Route::get('Users', [UserController::class,'users'])->name('users');
    Route::get('Users/addusers', [UserController::class,'addusers'])->name('addusers');
    Route::post('Users/insertusers', [UserController::class,'insertusers'])->name('insertusers');
    Route::get('Users/edituser/{id}',[UserController::class,'edituser']);
    Route::post('updateuser/{id}',[UserController::class,'updateuser']);
    Route::get('Users/deleteuser/{id}', [UserController::class,'deleteuser'])->name('deleteuser');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
