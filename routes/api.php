<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PoliticsController;
use App\Http\Controllers\PoliticsPartyController;
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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//API Authentication
Route::post('/getAccess', [LoginController::class, 'getAccessFromUser']);
Route::post('/register', [RegisterController::class, 'create']);

//API Person
Route::get('/getAllPersons',[PersonController::class, 'getAllPersons']);
Route::get('/getPersonFromId',[PersonController::class, 'getPersonFromId']);

//API Politics
Route::get('/getAllPolitics',[PoliticsController::class, 'getAllPolitics']);
Route::get('/getPoliticFromId',[PoliticsController::class, 'getPoliticFromId']);

//API Politics Party
Route::get('/getAllPartyPolitics',[PoliticsPartyController::class, 'getAllPartyPolitics']);
Route::get('/getPoliticPartyFromId',[PoliticsPartyController::class, 'getPoliticPartyFromId']);


