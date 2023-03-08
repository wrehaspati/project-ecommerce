<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [ItemController::class, 'homepage'])->name('homepage');

Route::get('product/{name}', [ItemController::class, 'index'])->name('product');


Route::middleware('auth', 'verified', 'admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function(){ return view('admin.index'); })->middleware(['auth', 'verified', 'admin']);
        Route::prefix('products')->group(function () {
            Route::get('/', function(){ return view('admin.item-manage'); })->name('show.items');
            Route::get('item/insert', [AdminController::class, 'itemInsert'])->name('item.insert');
            Route::get('user', function(){ return view('admin.user-manage'); })->name('show.users');
            Route::get('image', function(){ return view('admin.image-manage'); })->name('show.images');
        });
        Route::prefix('products')->group(function () {
            Route::get('/{name}/edit', [ItemController::class, 'edit'])->name('product.edit');
            Route::post('/store', [ItemController::class, 'store'])->name('product.store');
            Route::post('/update', [ItemController::class, 'update'])->name('product.update');
        });
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
