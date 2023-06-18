<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeContoller;
use App\Http\Controllers\AvatarController;

Route::get('/',[WelcomeContoller::class,'welcome_page'])->name('welcome_page.welcome_page');
Route::get('/product',[WelcomeContoller::class,'product'])->name('welcome_page.product');
Route::get('/about',[WelcomeContoller::class,'about'])->name('welcome_page.about');
Route::get('/FAQS',[WelcomeContoller::class,'FAQS'])->name('welcome_page.FAQS');
Route::get('/test',[WelcomeContoller::class,'test'])->name('welcome_page.test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
