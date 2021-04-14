<?php

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

Route::get('welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\TemplateController;
Route::get('/', 'App\Http\Controllers\TemplateController@index');

use App\Http\Controllers\MailController;
Route::get('/send', [MailController::class, 'send']);

use App\Http\Controllers\UploadController;
Route::view('upload', 'frontend.master');
Route::post('upload', [UploadController::class, 'index']);
