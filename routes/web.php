<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('home', [AdminController::class, 'indexView'])->name('home');
