<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Delivery\DeliveryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Livreurs\RegisterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\SuiviLivraison;
use App\Http\Controllers\UserController;
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
Route::get('gestion-users', UserController::class)->name('users.index');
Route::post('verified-status-delivery', [SuiviLivraison::class, 'verified'])->name('delivery.verify');
Route::get('verified-status-response/{response}', [SuiviLivraison::class, 'response'])->name('delivery.response');
Route::get('delete-payment/{id}', [DeliveryController::class, 'remove'])->name('delivery.destroy');
Route::get('/delivery/print/{id}', [InvoiceController::class, 'invoicedelivery'])->name('delivery.invoice');
Route::get('/users', UserController::class)->name('gestion.users');
Route::get('/depart-imminents', [HomeController::class ,'listeDepart'])->name('depart.index');
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/comment-ca-marche', function() {
    return view('comment-ca-marche');
});
Auth::routes();
