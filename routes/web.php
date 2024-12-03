<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/berita', [NewsController::class, 'newsPagination']);
Route::get('/detailNews', [NewsController::class, 'detailNews']);
Route::get('/about-earthquake', function(){
    return view('tentangGempa');
});
Route::get('/statistic', function(){
    return view('dataGempa');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
