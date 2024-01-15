<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyImageController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/images/{id}', [PropertyImageController::class, 'displayImage'])->name('image.displayImage');
Route::get('/city/{id}/property', [HomeController::class, 'cityViewer'])->name('city.property');
Route::get('test', [PropertyController::class, 'test']);
Route::get('/property/{id}/details', [PropertyController::class, 'propertyDetails']); //cityviwer ajax calls
//rent route
Route::get('/rent', [HomeController::class, 'rent'])->name('rent');
//buy route
Route::get('/buy', [HomeController::class, 'buy'])->name('buy');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/datatable', [HomeController::class, 'datatable'])->name('datatable');
Route::get('/datatable/getdata', [HomeController::class, 'getPosts']);
Route::post('/datatable/postdata', [HomeController::class, 'postPosts']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
