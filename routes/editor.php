<?php

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
});
