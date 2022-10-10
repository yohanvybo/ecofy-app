<?php

use App\Http\Controllers\MondayController;
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

Route::get('/monday/ecofy/admin-widget', function () {
    return view('admin');
});

Route::get('/monday/ecofy/participant-widget', function () {
    return view('participant');
});
Route::get('/monday/ecofy/home', function () {
    return view('ecofy');
});
Route::get('/monday/ecofy/terms', function () {
    return view('terms');
});
Route::get('/monday/ecofy/privacy', function () {
    return view('privacy');
});



Route::get('/monday/ecofy/getparticipant',  [MondayController::class, 'getparticipant']);

Route::get('/monday/ecofy/savescore', [MondayController::class, 'savescore']);



/*ADMIN*/

Route::get('/monday/ecofy/getadmin', [MondayController::class, 'getadmin']);
Route::post('/monday/ecofy/createsetup', [MondayController::class, 'createsetup']);
Route::get('/monday/ecofy/changesetup', [MondayController::class, 'changesetup']);
Route::get('/monday/ecofy/changereward', [MondayController::class, 'changereward']);
Route::get('/monday/ecofy/prizevisibility', [MondayController::class, 'prizevisibility']);

