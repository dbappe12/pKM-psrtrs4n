<?php

use App\Http\Controllers\Harga\PegawaiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {


  
   Route::resource('pegawai', PegawaiController::class);

 

 
});




