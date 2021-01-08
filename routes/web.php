<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//website
Route::get('/', [\App\Http\Controllers\website\HomeController::class, 'index'])->name('website.index');
Route::get('/categories', [\App\Http\Controllers\website\CategoryController::class, 'index'])->name('categories.index');
Route::get('/recipe', [\App\Http\Controllers\website\RecipeController::class, 'index'])->name('recipe.index');
Route::get('/profile', [\App\Http\Controllers\website\ProfileController::class, 'index'])->name('profile');

//dashboard
Route::get('/admin/users', [\App\Http\Controllers\Dashboard\UserController::class, 'index'])->name('users.index');
Route::get('/admin/users/create', [\App\Http\Controllers\Dashboard\UserController::class, 'create'])->name('users.create');
Route::put('/admin/users/{user}', [\App\Http\Controllers\Dashboard\UserController::class, 'update'])->name('users.update');
Route::get('/admin/users/{user}/edit', [\App\Http\Controllers\Dashboard\UserController::class, 'edit'])->name('users.edit');
Route::post('/admin/users', [\App\Http\Controllers\Dashboard\UserController::class, 'store'])->name('users.store');
Route::delete('/admin/users/{user}', [\App\Http\Controllers\Dashboard\UserController::class, 'destroy'])->name('users.destroy');

