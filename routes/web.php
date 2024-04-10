<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Delivery\DeliveryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Livreurs\RegisterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PayementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/monprofile', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/createDelivery', [DeliveryController::class,'create'])->name('create.delivery');
Route::get('/listedelivery', [DeliveryController::class,'index'])->name('index.delivery');
Route::get('/delivery/show/{id}', [DeliveryController::class, 'show'])->name('show.delivery');
Route::get('/price-delivery', [HomeController::class, 'deliveryprice'])->name('delivery.price');
Route::post('/initialise-payment-Auth-=1', [PayementController::class, 'initialisePayment'])->name('initialise.payment');
Route::get('/paymentsucces', [PayementController::class, 'successpayment'])->name('payment.sucess');
Route::get('/paymentfailled', [PayementController::class, 'failledpayment'])->name('failled.payment');

Auth::routes();
