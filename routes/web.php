<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelationshipController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('login', function () {
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('login');
// });
// Route::post('login',[]);
// // Route::middleware('checklogin')->group(function (){
//     // Route::get('profile',[ProfileController::class, 'profile'])->name('profile');
//     Route::get('/profile',[ProfileController::class, 'profile'])->middleware('checklogin');
//     Route::get('/logout', function () {
//         // dd(session());
//         if(session()->has('user')){
//             session()->pull('user',null);
//         }
//         // dd("wsgved");
//         return redirect('login');
//     });
// });
Route::get('lan',[ProfileController::class,'lan']);

//relationship
Route::get('one-to-one',[RelationshipController::class,'one_to_one']);

Route::get('one-to-many',[RelationshipController::class,'one_to_many']);

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

Route::get('login',[ProfileController::class,'login'])->name('login');
Route::get('profile',[ProfileController::class, 'profile'])->name('profile');
Route::get('logout',[ProfileController::class, 'logout']);
