<?php

## list Route
use App\Http\Controllers\Hospital\DashboardController;
use App\Http\Controllers\Hospital\DonorController;
use App\Http\Controllers\Hospital\ObligationController;
use App\Http\Controllers\Hospital\OperationController;
use App\Http\Controllers\Hospital\ReceiverController;
use App\Models\Receiver;

Route::prefix('hospital')->middleware(['auth:hospital'])->name('hospital.')->group(function (){

    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    Route::get('receiver',[ReceiverController::class,'index'])->name('receiver');
    Route::get('show-receiver/{id}',[ReceiverController::class,'show'])->name('receiver.show');

    Route::get('donor',[DonorController::class,'index'])->name('donor');
    Route::get('show-donor/{id}',[DonorController::class,'show'])->name('donor.show');

    Route::get('obligation',[ObligationController::class,'index'])->name('obligation');

    Route::post('make-operation',[OperationController::class,'make'])->name('make-operation');

    Route::get('show-operation',[OperationController::class,'index'])->name('show-operation');
    Route::get('details-operation/{id}',[OperationController::class,'show'])->name('details-operation');


});
