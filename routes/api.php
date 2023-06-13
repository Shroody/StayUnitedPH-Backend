<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\MapEventController;
use App\Http\Controllers\MapShelterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\AssistanceNeedController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/addcoordinate', [MapsController::class, 'addCoordinates']);
Route::get('/getcoordinate/{name}', [MapsController::class, 'getCoordinate']);
Route::post('/addevent', [MapEventController::class, 'addEvent']);
Route::post('/addshelter', [MapShelterController::class, 'addShelter']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/maps', [DisasterController::class, 'getDisasterDetails']);
Route::post('/add-disaster', [DisasterController::class, 'addDisasterInfo']);
Route::post('/delete-disaster', [DisasterController::class, 'deleteDisaster']);
Route::get('/disaster-info', [DisasterController::class, 'getDisasterInfo']);
Route::post('/add-participants', [DisasterController::class, 'addParticipants']);
Route::get('/needs', [ AssistanceNeedController::class, 'getNeeds']);
Route::post('/add-needs', [ AssistanceNeedController::class, 'addNeeds']);
Route::post('/delete-needs', [ AssistanceNeedController::class, 'deleteNeeds']);
