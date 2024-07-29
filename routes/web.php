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

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\InwardOutwardController;

// Routes for Category CRUD operations
Route::resource('categories', CategoryController::class);

// Routes for Material CRUD operations
Route::resource('materials', MaterialController::class);

Route::get('inward-outward/create', [InwardOutwardController::class, 'create'])->name('inward-outward.create');

Route::post('inward-outward/store', [InwardOutwardController::class, 'store'])->name('inward-outward.store');

Route::get('/manage', [MaterialController::class, 'manage'])->name('materials.manage');
