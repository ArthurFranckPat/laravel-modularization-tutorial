<?php
use \Illuminate\Support\Facades\Route;

//Order Routes
Route::middleware('web')->group(function (){
    Route::get('/',function(){});
})->prefix('orders');
