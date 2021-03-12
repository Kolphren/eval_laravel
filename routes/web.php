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
Route::get('/characters', [NavController::class, 'characters']);
Route::get('/designers', [NavController::class, 'designers']);
Route::get('/add_character', [NavController::class, 'add_character']);
Route::post('/addCharacter', [CharacterController::class, 'addOne']);
Route::get('/add_designer', [NavController::class, 'add_designer']);
Route::post('/addDesigner', [DesignerController::class, 'addOne']);
Route::get('/modifyCharacter/{id}', [NavController::class, 'modify_character']);
Route::post('/modifyCharacter', [CharacterController::class, 'modifyOne']);
Route::post('/removeCharacter', [CharacterController::class, 'removeOne']);
Route::get('/modifyDesigner/{id}', [NavController::class, 'modify_designer']);
Route::post('/removeDesigner', [DesignerController::class, 'removeOne']);
Route::post('/modifyDesigner', [DesignerController::class, 'modifyOne']);
