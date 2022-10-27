<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
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
    return view('home',[
        'title' => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => "About"
    ]);
});
Route::get('/education', function () {
    return view('education',[
        'title' => "Education"
    ]);
});
Route::get('/projects', function () {
    return view('project',[
        'title' => "Project"
    ]);
});
Route::get('/welcome', function () {
    return view('welcome',[
        'title' => "welcome"
    ]);
});
Route::resource('posts',
'App\Http\Controllers\PostController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes([
    'reset' => false,
   ]);
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
   
    Mail::to('Anggito732@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
   });