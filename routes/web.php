<?php

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
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

Route::controller(LoginController::class)->group(function () {
	Route::view('/login', 'login.index')->name('login')->middleware('guest');
	Route::post('/login', 'login')->name('login.store')->middleware('guest');
	Route::post('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
	Route::prefix('tasks')->group(function () {
		Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
		Route::view('/create', 'create')->name('tasks.create');
		Route::post('/', [CreateTaskController::class, 'store'])->name('tasks.store');
		Route::get('/{task}/edit', [EditTaskController::class, 'edit'])->name('tasks.edit');
		Route::patch('/{task}', [EditTaskController::class, 'update'])->name('tasks.update');
		Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
		Route::get('/{task}', [TaskController::class, 'show'])->name('tasks.show');
	});
	Route::view('profile', 'profile')->name('profile');
});

Route::get('change/{locale}', [LanguageController::class, 'setLocale'])->name('change_language');
