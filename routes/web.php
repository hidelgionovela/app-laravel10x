<?php

// use App\Http\Controllers\Admin\{SupportController}; // de forma a todas rotas que usam esse controller possam usar
use App\Http\Controllers\SupportController; 
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

// Route::get('/supports', [SupportController::class, 'index'])->name('supports');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('site/contact');
});
