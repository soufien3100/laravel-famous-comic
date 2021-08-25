<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;



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


Route::get('/', [NavController::class, 'home']);
Route::get('/characters', [NavController::class, 'characters']);
Route::get('addCharacter', [NavController::class, 'addCharacter']);
Route::post('addCharacter', [ActionController::class, 'addCharacter']);
Route::post('/deleteCharacter',[ActionController::class,'deleteCharacter']);
Route::get('/character/{id}', [NavController::class,'character']) ; 
Route::post('/update',[NavController::class,'update']);
Route::post('/updateCharacter',[ActionController::class,'updateCharacter']) ; 
