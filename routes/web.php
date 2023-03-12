<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/sobre-nosotros', [WebsiteController::class, 'about'])->name('about');
Route::get('/guarderia', [WebsiteController::class, 'nursery'])->name('nursery');
Route::get('/preescolar', [WebsiteController::class, 'preschool'])->name('preschool');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contacto', [WebsiteController::class, 'submitForm'])->name('submitForm');
Route::get('/area-para-padres', [WebsiteController::class, 'parentsArea'])->name('parentsArea');
Route::get('programas', [WebsiteController::class, 'programs'])->name('programs');
Route::get('inscripciones', [WebsiteController::class, 'enrollments'])->name('enrollments');
Route::get('/politicas-de-privacidad', [WebsiteController::class, 'privacyPolicy'])->name('privacyPolicy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
