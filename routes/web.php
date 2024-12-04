<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\staffcontroller;
use App\Http\Controllers\driveinController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;



// routes/web.php
Route::post('/update-slot-status', [SlotController::class, 'updateStatus'])->name('update-slot-status');

Route::post('reserve-and-insert-token', [ReservationController::class, 'store'])->name('reserve-and-insert-token');
Route::post('/order-now', [OrderController::class, 'verifyToken']);
Route::post('/confirm-payment', [PaymentController::class, 'confirmPayment']);
Route::get('/slots', [driveinController::class, 'getSlots']);
Route::post('/book-slot', [driveinController::class, 'bookSlot']);
Route::post('/confirm-payment', [driveinController::class, 'confirmPayment']);

Route::post('/submit-order', [OrderController::class, 'submitOrder']);


Route::get('/management/login', [admincontroller::class,'login']);
Route::get('/drivein', [driveinController::class,'index']);


Route::get('/',function(){
    return view('welcome');
});
Route::get('/status',function(){
    return view('status');
});
Route::get('/menu',function(){
    return view('menu');
});
Route::post('/management/login', [admincontroller::class,'auth_login']);

Route::group(['middleware' =>'useradmin'],function(): void{
    Route::resource('dashboard', controller: dashboardcontroller::class);
    Route::resource('staff', controller: staffcontroller::class);
    Route::resource('orders', controller: orderItemController::class);
    Route::put('/orders/{id}/update-status', [OrderItemController::class, 'updateStatus'])->name('orders.updateStatus');
});
Route::post('logout', function () {
    Auth::logout();
    return redirect('/management/login'); // Redirect to home or login page
})->name('logout');