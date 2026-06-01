<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/', [PortfolioController::class, 'index'])->name('home');
//  Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');
