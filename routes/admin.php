<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MemberController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

// member
Route::resource('/member', MemberController::class, ['names' => 'admin.member']);

