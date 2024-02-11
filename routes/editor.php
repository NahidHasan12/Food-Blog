<?php

use App\Http\Controllers\Editor\Editor_catController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\EditorController;







//login Route
Route::middleware(['editor_login'])->group(function () {
    Route::get('/editor/login', [EditorController::class, 'login_from'])->name('editor.login_form');
    Route::post('/editor/check_login', [EditorController::class, 'login'])->name('editor.login');
});
Route::get('/editor/logout', [EditorController::class, 'logout'])->name('editor.logout');

Route::middleware(['editor_permission'])->group(function () {
    Route::get('/editor', [EditorController::class, 'index'])->name('editor.dashboard');
    Route::get('/editor/category', [Editor_catController::class, 'index'])->name('editor.category');
    Route::get('/editor/search_category', [Editor_catController::class, 'search_category'])->name('editor.search_category');
});

