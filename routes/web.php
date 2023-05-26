<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogContoller;
use App\Http\Controllers\AdminAuthController;

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


Route::get('/', [blogContoller::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function(){

	Route::get('/admin/register', [AdminAuthController::class, 'register'])->name('register');
	Route::post('/admin/register', [AdminAuthController::class, 'registerUser'])->name('register');

	Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
	Route::post('/admin/login', [AdminAuthController::class, 'loginUser'])->name('admin.login');
});

Route::group(['middleware' => 'auth'], function(){

	Route::delete('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

	Route::get('/dashboard/addPosts', [blogContoller::class, 'create'])->name('dashboard.create');

	Route::post('/dashboard/store', [blogContoller::class, 'store'])->name('dashboard.store');

	Route::get('/dashboard/blogPosts', [blogContoller::class, 'blogPosts'])->name('dashboard.blogPosts');

	Route::get('/dashboard/{id}/show', [blogContoller::class, 'show']);
	Route::get('/dashboard/{id}/edit', [blogContoller::class, 'edit']);
	Route::put('/dashboard/{id}/update', [blogContoller::class, 'update']);
	Route::get('/dashboard/{id}/delete', [blogContoller::class, 'destroy']);
});




// Route::delete('/admin/logout', [AdminAuthController::class], 'logout')->name('logout');

