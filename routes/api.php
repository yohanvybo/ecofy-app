<?php

use App\Http\Controllers\MondayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});



Route::get('/monday/ecofy/getparticipant',  [MondayController::class, 'getparticipant']);

Route::get('/monday/ecofy/savescore', [MondayController::class, 'savescore']);



/*ADMIN*/

Route::get('/monday/ecofy/getadmin', [MondayController::class, 'getadmin']);
Route::post('/monday/ecofy/createsetup', [MondayController::class, 'createsetup']);
Route::get('/monday/ecofy/changesetup', [MondayController::class, 'changesetup']);
Route::get('/monday/ecofy/changereward', [MondayController::class, 'changereward']);
Route::get('/monday/ecofy/prizevisibility', [MondayController::class, 'prizevisibility']);



