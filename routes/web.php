<?php


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

Route::get('/home', function(){
    return redirect()->route('/');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// page Manage
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/diet_food', [PagesController::class, 'diet_food'])->name('pages.diet_food');
Route::get('/fast_food', [PagesController::class, 'fast_food'])->name('pages.fast_food');
Route::get('/biriany', [PagesController::class, 'biriany'])->name('pages.biriany');



