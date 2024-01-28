<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecordController;



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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/records', [RecordController::class, 'index'])->name('record.index');
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/records/create', [RecordController::class, 'create']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::post('/records', [RecordController::class, 'store']);
    Route::get('/posts/{post}', [PostController::class ,'show']);
    Route::get('/records/{post}', [RecordController::class ,'show']);
    Route::get('/records/{record}/edit', [RecordController::class, 'edit']);
    Route::put('/records/{record}', [RecordController::class, 'update']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/records/{record}', [RecordController::class,'delete']);
    Route::delete('/posts/{post}', [PostController::class,'delete']);
    
});



require __DIR__.'/auth.php';
