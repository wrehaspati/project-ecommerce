<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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

Route::get('products/{name}', [ItemController::class, 'index'])->name('product.overview');


Route::middleware('auth', 'verified', 'admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function(){ return view('admin.index'); })->middleware(['auth', 'verified', 'admin']);
        Route::prefix('products')->group(function () {
            Route::get('/', function(){ return view('admin.item-manage'); })->name('show.items');
            Route::get('/add', function(){ return view('admin.item-insert'); })->name('show.add.product');
            Route::post('/store', [ItemController::class, 'store'])->name('product.store');
            Route::post('/update', [ItemController::class, 'update'])->name('product.update');
        });
        Route::prefix('blogs')->group(function () {
            Route::get('/', function(){ return view('admin.blog-manage'); })->name('show.blog');
            Route::get('/add', [BlogController::class, 'create']);
            Route::get('/store', function(){ return view('admin.blog-add'); })->name('blog.store');
        });
    });
    Route::prefix('products')->group(function () {
        Route::get('/{name}/edit', [ItemController::class, 'edit'])->name('product.edit');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
