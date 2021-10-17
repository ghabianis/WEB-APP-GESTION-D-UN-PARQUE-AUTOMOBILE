<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/addcontact',[App\Http\Controllers\ContactController::class,'addcontact'])->name('addcontact');
Route::post('/addassigne',[App\Http\Controllers\assignationController::class,'addassigne'])->name('addassigne');
Route::post('/Reclamer',[App\Http\Controllers\reclamerController::class,'Reclamer'])->name('Reclamer');
Route::get('/suivi',[App\Http\Controllers\assignationController::class,'suivi'])->name('suivi');
Route::delete('/deleteData/{id}',[App\Http\Controllers\assignationController::class,'deleteData'])->name('deleteData');
Route::post('/addVoiture',[App\Http\Controllers\voitureController::class,'addVoiture'])->name('addVoiture');
Route::get('/getVoiture',[App\Http\Controllers\voitureController::class,'getVoiture'])->name('getVoiture');
Route::delete('/deleteVoiture/{id}',[App\Http\Controllers\voitureController::class,'deleteVoiture'])->name('deleteVoiture');



