<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {    return view('userview.index');});
Route::get('/blogs', function () {    return view('userview.blogs');});
Route::get('/contact', function () {    return view('userview.contactus');});
Route::get('/packages', function () {    return view('userview.packages');});
Route::get('/about', function () {    return view('userview.aboutus');});





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
