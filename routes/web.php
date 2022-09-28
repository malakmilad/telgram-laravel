<?php

use App\Http\Controllers\TelegramController;
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
Route::get('telegram',[TelegramController::class,'updateActivity']);
route::get('telegram/index',[TelegramController::class,'sendmassage']);
route::post('telegram/store',[TelegramController::class,'storemassage']);
route::post('telegram/storephoto',[TelegramController::class,'storephoto']);


