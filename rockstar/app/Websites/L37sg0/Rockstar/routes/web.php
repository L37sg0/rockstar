<?php

use L37sg0\Rockstar\Http\Controllers\AdminController;
use L37sg0\Rockstar\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Front Section
 */
Route::match(['get','post'], '', [FrontendController::class, 'index']);

/**
 * Admin Section
 */
Route::middleware(['web', 'auth'])->group(function () {
    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], static function () {
        Route::match(['get', 'post'], '', function () {
            return redirect(\route('dashboard.icon-section.view'));
        });
        /** Icon Section */
        Route::group(['as' => 'icon-section.', 'prefix' => 'icon-section'], static function() {
            Route::get('view', [AdminController::class, 'iconSection'])->name('view');
            Route::post('update', [AdminController::class, 'iconSectionUpdate'])->name('update');
        });
        /** Home Section */
        Route::group(['as' => 'home-section.', 'prefix' => 'home-section'], static function() {
            Route::get('view', [AdminController::class, 'homeSection'])->name('view');
            Route::post('update/{imageName}', [AdminController::class, 'homeSectionUpdate'])->name('update');
        });
        Route::match(['get', 'post'], 'band-section', [AdminController::class, 'bandSection'])->name('band-section');
        Route::match(['get', 'post'], 'tour-section', [AdminController::class, 'tourSection'])->name('tour-section');
        Route::match(['get', 'post'], 'contact-section', [AdminController::class, 'contactSection'])->name('contact-section');
        Route::match(['get', 'post'], 'social-section', [AdminController::class, 'socialSection'])->name('social-section');
    });
});
