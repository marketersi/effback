<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/contact-setting' ,[ApiController::class, 'contactSetting']);
Route::get('/get_factow' ,[ApiController::class, 'factowCard']);
Route::get('/get_factow-setting', [ApiController::class, 'factowSetting']);
Route::get('/get_calculator', [ApiController::class, 'calculatorSetting']);
Route::get('/get-home-screen-setting' ,[ApiController::class, 'homeScreenSetting']);
Route::get('/get-kreatywny-montaż-video-setting' ,[ApiController::class, 'kreatywnyMontażVideoSetting']);
Route::get('/get-profesjonalne-nagrywanie-filmów-setting' ,[ApiController::class, 'profesjonalneNagrywanieFilmówSetting']);
Route::get('/get-konsultacja-setting' ,[ApiController::class, 'konsultacjaSetting']);
Route::get('/examination' ,[ApiController::class, 'examination']);
Route::get('/get-marketing-strategy', [ApiController::class, 'MarketingStrategy']);
Route::get('/projektowanie' ,[ApiController::class, 'projektowanie']);
Route::get('/teamsearch-section' ,[ApiController::class, 'teamSection']);
Route::get('/UX' ,[ApiController::class, 'UXSetting']);
Route::get('/price-list-setting' ,[ApiController::class, 'priceListSetting']);
Route::get('/opinion-screen-setting' ,[ApiController::class, 'opinionSetting']);
Route::get('/sales-content-setting' ,[ApiController::class, 'salesContentSetting']);
Route::get('/business-name-creation',[ApiController::class, 'businessNameCreation']);

Route::post('cenik/menus' ,[ApiController::class, 'menusIndex']);
Route::post('cenik/menus/store' ,[ApiController::class, 'menusStore']);
// sales 
Route::post('sales',[ApiController::class,'sales']);
// examination
Route::post('/post-examination',[ApiController::class,'examZemoScreen']);


Route::post('/contactMail', [ApiController::class, 'contactMail']); 


