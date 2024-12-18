<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Menu;
use App\Http\Controllers\pages\User;
use App\Http\Controllers\pages\Member;
use App\Http\Controllers\pages\Order;
use App\Http\Controllers\pages\Penjualan;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;

// Main Page Route
Route::get('/', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::post('/login', [LoginBasic::class, 'login'])->name('login');
Route::get('/home', [HomePage::class, 'index'])->name('pages-home');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::post('/register', [RegisterBasic::class, 'register'])->name('register');


Route::get('/list-menu', [Menu::class, 'index'])->name('pages-list-menu');
Route::get('/list-user', [User::class, 'index'])->name('pages-list-user');
Route::get('/list-member', [Member::class, 'index'])->name('pages-list-member');
Route::get('/list-order', [Order::class, 'index'])->name('pages-list-order');
Route::get('/laporan-penjualan', [Penjualan::class, 'index'])->name('pages-laporan-penjualan');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// locale
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
