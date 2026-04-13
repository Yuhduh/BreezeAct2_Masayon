<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\supplierController;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'productsCount' => Product::count(),
        'suppliersCount' => Supplier::count(),
        'stocksCount' => Stock::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', [productController::class, 'index'])->middleware(['auth', 'verified'])->name('products');

Route::get('/add-product', function () {
    return view('addProduct');
})->middleware(['auth', 'verified'])->name('addProduct');
Route::post('/add-product', [productController::class, 'store'])->middleware(['auth', 'verified'])->name('addProduct.store');

Route::get('/supplier', [supplierController::class, 'index'])->middleware(['auth', 'verified'])->name('supplier');
Route::post('/supplier', [supplierController::class, 'store'])->middleware(['auth', 'verified'])->name('supplier.store');

Route::get('/stock', [stockController::class, 'index'])->middleware(['auth', 'verified'])->name('stock');
Route::post('/stock', [stockController::class, 'store'])->middleware(['auth', 'verified'])->name('stock.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
