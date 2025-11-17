<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/test',function(){
    return response()->json(['message'=>'API is working']);
});

Route::get('/users',[UserController::class, 'index']);
Route::post('/users',[UserController::class, 'store']);