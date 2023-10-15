<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

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
// Redis local
Route::get('/store', function () {
    Redis::set('Bangkok', 'Krung thep Maha Nakhon === > WORAPONG WONGLAMDUAN');
});


Route::get('/retrieve', function () {
    return Redis::get('Bangkok');
});

//mail hog
Route::get('/send-email', function () {
    Mail::to('worapongaonmb7@gmail.com')->send(new TestMail);
});
