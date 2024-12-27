<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\User;
use App\Http\Controllers\pages\Member;
use App\Http\Controllers\pages\Order;
use App\Http\Controllers\pages\Penjualan;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MessageController;

// Login Route
Route::middleware('login')->group(function () {
  Route::get('/', [LoginBasic::class, 'index'])->name('login');
  Route::get('/login', [LoginBasic::class, 'index'])->name('login');
  Route::post('/login', [LoginBasic::class, 'login'])->name('login');
});

// Logout Route
Route::get('/logout', [LoginBasic::class, 'logout'])->name('logout');

// Register Route
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::post('/register', [RegisterBasic::class, 'register'])->name('register');

//main route
Route::middleware('auth')->group(function () {
  Route::get('/home', [HomePage::class, 'index'])->name('home');
  Route::get('/list-menu', [MenuController::class, 'listmenu'])->name('listmenu');
  Route::post('/list-menu', [MenuController::class, 'addmenu'])->name('addmenu');
  Route::get('/list-user', [User::class, 'index'])->name('pages-list-user');
  Route::get('/list-member', [Member::class, 'index'])->name('pages-list-member');
  Route::get('/list-order', [Order::class, 'index'])->name('pages-list-order');
  Route::get('/laporan-penjualan', [Penjualan::class, 'index'])->name('pages-laporan-penjualan');
  Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');
});

// Guest Route
Route::get('/guestmenu', [MenuController::class, 'guestmenu'])->name('guestmenu');
Route::post('/guestmenu/add', [MenuController::class, 'guestmenuadd'])->name('guestmenuadd');
Route::post('/guestmenu/remove', [MenuController::class, 'guestmenuremove'])->name('guestmenuremove');


// locale
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
