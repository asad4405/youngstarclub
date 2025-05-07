<?php

use App\Http\Controllers\Backend\CollectionController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DonationController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\ProgramController;
use App\Http\Controllers\Backend\SocialMediaController;
use App\Http\Controllers\Backend\UserListController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // member
    Route::resource('/member', MemberController::class, ['names' => 'admin.member']);
    Route::get('/member/download/{id}', [MemberController::class, 'download'])->name('admin.member.download');

    // program
    Route::resource('/program', ProgramController::class, ['names' => 'admin.program']);

    // Club Member Collection
    Route::resource('/club-memeber/collection', CollectionController::class, ['names' => 'admin.collection']);

    // Donation
    Route::resource('/donation', DonationController::class, ['names' => 'admin.donation']);

    // Expense
    Route::resource('/expense', ExpenseController::class, ['names' => 'admin.expense']);

    // setting
    Route::resource('/setting', GeneralSettingController::class, ['names' => 'admin.setting']);

    // social media
    Route::resource('social-media', SocialMediaController::class, ['names' => 'admin.setting.social-media']);

    // contat
    Route::resource('contact', ContactController::class, ['names' => 'admin.setting.contact']);

});
