<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/table', function () {
    return view('table');
});
Route::get('/data-table', function () {
    return view('data-table');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// CRUD
// Create Data
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);

// Read data
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);

// Update data
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}', [CategoriesController::class, 'update']);

// Delete data
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);
