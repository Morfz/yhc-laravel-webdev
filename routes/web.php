<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('/dashboard', '/admin')->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    
    Route::get('/courses', [AdminController::class, 'coursesIndex'])->name('courses.index');
    Route::get('/courses/create', [AdminController::class, 'coursesCreate'])->name('courses.create');
    Route::post('/courses', [AdminController::class, 'coursesStore'])->name('courses.store');
    Route::get('/courses/{course}/edit', [AdminController::class, 'coursesEdit'])->name('courses.edit');
    Route::put('/courses/{course}', [AdminController::class, 'coursesUpdate'])->name('courses.update');
    Route::delete('/courses/{course}', [AdminController::class, 'coursesDestroy'])->name('courses.destroy');
    Route::get('/courses/{course}', [AdminController::class, 'coursesShow'])->name('courses.show');
    Route::get('/courses/{course}/lessons/create', [AdminController::class, 'coursesCreateLesson'])->name('courses.create_lesson');
    Route::post('/courses/{course}/lessons', [AdminController::class, 'coursesStoreLesson'])->name('courses.store_lesson');
    Route::get('/courses/{course}/lessons/{lesson}/edit', [AdminController::class, 'coursesEditLesson'])->name('courses.edit_lesson');
    Route::put('/courses/{course}/lessons/{lesson}', [AdminController::class, 'coursesUpdateLesson'])->name('courses.update_lesson');
    Route::delete('/courses/{course}/lessons/{lesson}', [AdminController::class, 'coursesDestroyLesson'])->name('courses.destroy_lesson');
});

require __DIR__.'/auth.php';
