<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PurchaseController;
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
    return redirect('home');
    //return view('welcome');
});

Route::get('diner',[DinerController::class,'show'])->name('diner');
Route::get('food/{dinerid}',[App\Http\Controllers\FoodController::class,'show'])->name('food');
Route::get('feedback/{dinerid}',[App\Http\Controllers\FeedbackController::class,'show'])->name('feedback');
Route::post('savefeedback/{dinerid}',[App\Http\Controllers\FeedbackController::class,'store'])->name('savefeedback');

Route::get('purchase',[PurchaseController::class,'show']);
Route::post('savepurchase/{foodid}',[App\Http\Controllers\PurchaseController::class,'store'])->name('savepurchase');

Route::get('adddiner', function () {
    return view('addDiner');
})->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
