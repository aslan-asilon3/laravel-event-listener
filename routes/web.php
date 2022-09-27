<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\sample;
use App\Mail\SendEmail;

use App\Http\Controllers\SendMailController;

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
    return view('sendmail');
});

Route::get('error', [sample::class, 'error']);



Route::get('index-email', [SendMailController::class, 'index']);
Route::post('send-email', [SendMailController::class, 'send']);

//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);




