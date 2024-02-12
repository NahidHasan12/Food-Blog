<?php

use App\Http\Controllers\Admin\Admin_editorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\WebSettingsController;

//login Route
Route::middleware(['admin_login'])->group(function () {
Route::get('/admin/login', [AdminController::class, 'login_from'])->name('admin.login_form');
Route::post('/admin/check_login', [AdminController::class, 'login'])->name('admin.login');
});


// page Manage
Route::middleware(['permission'])->group(function() {
    // Admin Logout
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/change_pass', [AdminController::class, 'change_password'])->name('admin.change_password');
    Route::put('/admin/forget_pass/{id}', [AdminController::class, 'forget_password'])->name('admin.forget_password');

    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('page.dashboard');
    Route::get('/admin/web_settings', [WebSettingsController::class, 'webSettings'])->name('page.web_settings');

    // Category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('page.category');
    Route::post('/admin/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'category_edit'])->name('category.edit');
    Route::put('/admin/category/update/{id}', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');
    // Search Category
    Route::get('/admin/category/cat_search', [CategoryController::class, 'search_category'])->name('category.search_category');

    // post
    Route::get('/admin/post', [PostController::class, 'index'])->name('page.post');
    Route::post('/admin/post/store', [PostController::class, 'post_store'])->name('admin.post.store');
    Route::get('/admin/post/edit/{id}', [PostController::class, 'post_edit'])->name('admin.post.edit');
    Route::put('/admin/post/update/{id}', [PostController::class, 'post_update'])->name('admin.post.update');
    Route::get('/admin/post/view/{id}', [PostController::class, 'post_view'])->name('admin.post.view');
    Route::get('/admin/post/delete/{id}', [PostController::class, 'post_delete'])->name('admin.post.delete');
    // Search Post
    Route::get('/admin/post/search_post', [PostController::class, 'search_post'])->name('post.search_post');
    Route::get('/admin/post/cat_wise_post', [PostController::class, 'cat_wise_post'])->name('post.cat_wise_post');

    //Editor
    Route::get('/admin/editor', [Admin_editorController::class, 'add_editor'])->name('admin.editor');
    Route::post('/admin/editor/store', [Admin_editorController::class, 'store_editor'])->name('editor.store');
    Route::get('/admin/editor/edit/{id}', [Admin_editorController::class, 'edit_editor'])->name('editor.edit');
    Route::put('/admin/editor/update/{id}', [Admin_editorController::class, 'update_editor'])->name('editor.update');
    Route::get('/admin/editor/delete/{id}', [Admin_editorController::class, 'delete_editor'])->name('editor.delete');
    // Search Editor
    Route::get('/admin/editor/search_employe', [Admin_editorController::class, 'search_employe'])->name('editor.search_employe');

});
