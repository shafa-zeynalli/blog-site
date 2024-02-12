<?php

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

Route::get('/', [\App\Http\Controllers\front\BlogController::class, 'index'])->name('front.main');
Route::get('/singlepage/{blog}', [\App\Http\Controllers\front\BlogController::class, 'show'])->name('front.singlepage');
Route::get('/tokens/{token}', [\App\Http\Controllers\front\BlogController::class, 'showToken'])->name('front.tokens');



Route::get('/admin/dashboard', [\App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.main');

Route::get('/admin/blog', [\App\Http\Controllers\admin\AdminController::class, 'show'])->name('admin.blog.index');
Route::get('/admin/blog/create', [\App\Http\Controllers\admin\AdminController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/create', [\App\Http\Controllers\admin\AdminController::class, 'store']);
Route::get('/admin/blog/edit/{blog}', [\App\Http\Controllers\admin\AdminController::class, 'edit'])->name('admin.blog.edit');
Route::put('/admin/blog/update', [\App\Http\Controllers\admin\AdminController::class, 'update'])->name('admin.blog.update');
Route::delete('/admin/blog/delete/{blog}', [\App\Http\Controllers\admin\AdminController::class, 'destroy'])->name('admin.blog.destroy');
//Route::get('/admin/blog', [\App\Http\Controllers\admin\AdminController::class, 'show'])->name('admin.blog.index');

