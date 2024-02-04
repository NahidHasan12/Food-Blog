<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// page Manage
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/category', [PagesController::class, 'category'])->name('pages.category');


// MUlti Auth Route
Route::get('/admin/login', [AdminController::class, 'login_from']);
Route::post('/admin/check_login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/editor/login', [EditorController::class, 'login_from']);
Route::post('/editor/check_login', [EditorController::class, 'login'])->name('editor.login');
Route::get('/editor/logout', [EditorController::class, 'logout'])->name('editor.logout');
