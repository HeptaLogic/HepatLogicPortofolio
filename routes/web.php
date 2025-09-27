<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact', [ContactController::class, 'kirim']);
