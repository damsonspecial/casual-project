<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\categorydataController;
use App\Livewire\Counter;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/counter', Counter::class)->name('counter');

Route::group(['middleware' => 'auth'], function() {


Route::get('/create_category', [CategoryController::class, 'create'])->name('create_category');
Route::get('create_category/create', [CategoryController::class, 'create'])->name('create_category.create');
Route::post('create_category/store', [CategoryController::class, 'store'])->name('create_category.store');

Route::get('/inventory',[inventoryController::class, 'index'])->name('inventory');

//Route::get('/category_data', [categorydataController::class, 'address'])->name('category_data');
Route::get('/category_data', [categorydataController::class, 'getCategoryData'])->name('category_data');
Route::post('/submit_category_data', [categorydataController::class, 'submitCategoryData'])->name('submit_category_data');


});
require __DIR__.'/auth.php';
