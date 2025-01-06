<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/reels', function () {
    return view('reels');
})->middleware(['auth', 'verified'])->name('reels');
Route::get('/videos', function () {
    return view('videos');
})->middleware(['auth', 'verified'])->name('videos');
Route::get('/news', function () {
    return view('news');
})->middleware(['auth', 'verified'])->name('news');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get("changeMode", function () {
    if (session("mode") == "light") {
        session(["mode"=>  'dark']);
    } else {
        session(["mode"=>  'light']);
    }
    return back();
});



require __DIR__ . '/auth.php';
