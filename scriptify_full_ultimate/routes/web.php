<?php use Illuminate\Support\Facades\Route;
Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show']);
Route::get('/my-purchases', [App\Http\Controllers\PurchaseController::class, 'index'])->middleware('auth');