<?php

use App\Http\Controllers\Editor\Editor_catController;
use App\Http\Controllers\Editor\Editor_postController;
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
    //category
    Route::get('/editor/category', [Editor_catController::class, 'index'])->name('editor.category');
    Route::get('/editor/search_category', [Editor_catController::class, 'search_category'])->name('editor.search_category');

    //post
    Route::get('/editor/post', [Editor_postController::class, 'index'])->name('editor.post');
    Route::post('/editor/post/store', [Editor_postController::class, 'post_store'])->name('post.store');
    Route::get('/editor/post/edit/{id}', [Editor_postController::class, 'post_edit'])->name('post.edit');
    Route::put('/editor/post/update/{id}', [Editor_postController::class, 'post_update'])->name('post.update');
    Route::get('/editor/post/view/{id}', [Editor_postController::class, 'post_view'])->name('post.view');

    // Search Post
    Route::get('/editor/post/search_post', [Editor_postController::class, 'search_post'])->name('editor.post.search_post');
    Route::get('/editor/post/cat_wise_post', [Editor_postController::class, 'cat_wise_post'])->name('editor.post.cat_wise_post');
});


