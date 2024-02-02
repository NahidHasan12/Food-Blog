<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\WebSettingsController;
use Illuminate\Support\Facades\Route;


// page Manage
Route::get('/admin', [DashboardController::class, 'dashboard'])->name('page.dashboard');
Route::get('/admin/post', [PostController::class, 'index'])->name('page.post');
Route::get('/admin/web_settings', [WebSettingsController::class, 'webSettings'])->name('page.web_settings');

// Category
Route::get('/admin/category', [CategoryController::class, 'index'])->name('page.category');
Route::post('/admin/category/store', [CategoryController::class, 'category_store'])->name('category.store');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'category_edit'])->name('category.edit');
Route::put('/admin/category/update/{id}', [CategoryController::class, 'category_update'])->name('category.update');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');
