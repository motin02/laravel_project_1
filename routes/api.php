<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/hello', function () {
    return response()->json(['message' => 'API is working!']);
});
