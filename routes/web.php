<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DesignerController;



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
Route::get('characters', [NavController::class, 'characters']);
Route::get('listCharacter',[NavController::class,'characters']);
Route::get('addCharacter', [NavController::class, 'addCharacter']);
Route::post('addCharacter', [CharacterController::class, 'addCharacter']);
Route::post('deleteCharacter',[CharacterController::class,'deleteCharacter']);
Route::get('character/{id}', [NavController::class,'character']) ; 
Route::post('updateCharacter',[NavController::class,'updateCharacter']) ; 
Route::post('updateCharacter/{id}', [CharacterController::class, 'updateCharacters']);

Route::get('listDesigners',[NavController::class,'designers']);
Route::get('designer', [NavController::class, 'designer']);
Route::get('addDesigner', [NavController::class, 'addDesigner']);
Route::post('deleteDesigner',[DesignerController::class,'deleteDesigner']);
Route::get('designers/{id}', [NavController::class,'designers']) ; 
 