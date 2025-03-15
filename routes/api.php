<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/hello', function () {
    return response()->json(['message' => 'API is working!']);
});

//get all users
Route::get('/users',[UsersController::class,'getUsers']);

//get single users
Route::get('/user/{$id}',[UsersController::class,'getUser']);

//post create users
Route::post('/create-user}',[UsersController::class,'createUser']);

//update user
Route::put('/update-user/{$id}',[UsersController::class,'updateUser']);
