<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartUserController;
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

Route::prefix('products')->group(function () {
    Route::get('/', function(){ return view('products.products-dashboard');})->name('products.dashboard');
    Route::get('/{name}', [ItemController::class, 'show']);
})->name('products.group');

Route::middleware('auth', 'verified', 'admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function(){ return view('admin.index'); })->middleware(['auth', 'verified', 'admin']);
        Route::resource('/products', ItemController::class);
        Route::resource('/blogs', BlogController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/cart', CartUserController::class);
});


require __DIR__.'/auth.php';
