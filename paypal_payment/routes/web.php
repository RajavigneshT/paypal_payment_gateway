<?php

use App\Http\Controllers\PaypalController;
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


Route::get('handle-payment',[PaypalController::class,'handlePayment'])->name('make.payment');
Route::get('payment-success',[PaypalController::class,'paymentSuccess'])->name('payment.success');
Route::get('payment-failed',[PaypalController::class,'paymentFailed'])->name('payment.failed');









