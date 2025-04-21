<?php

use App\Http\Controllers\Backend\CollectionController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\ProgramController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

// member
Route::resource('/member', MemberController::class, ['names' => 'admin.member']);

// program
Route::resource('/program', ProgramController::class, ['names' => 'admin.program']);

// Club Member Collection
Route::resource('/club-memeber/collection', CollectionController::class, ['names' => 'admin.collection']);

