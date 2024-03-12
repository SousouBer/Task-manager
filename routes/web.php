<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
Route::redirect('/', '/tasks');
Route::controller(LoginController::class)->group(function () {
	Route::view('/login', 'login.index')->name('login')->middleware('guest');
	Route::post('/login', 'login')->name('login.store')->middleware('guest');
	Route::post('/logout', 'logout')->name('logout');
});
Route::prefix('tasks')->controller(TaskController::class)->middleware('auth')->group(function () {
	Route::get('/', 'index')->name('tasks.index');
	Route::delete('/', 'destroyOldTasks')->name('tasks.destoryOld');
	Route::view('/create', 'create')->name('tasks.create');
	Route::post('/', 'store')->name('tasks.store');
	Route::get('/{task}/edit', 'edit')->name('tasks.edit');
	Route::patch('/{task}', 'update')->name('tasks.update');
	Route::delete('/{task}', 'destroy')->name('tasks.destroy');
	Route::get('/{task}', 'show')->name('tasks.show');
});
Route::view('/profile', 'profile')->name('profile.index')->middleware('auth');
Route::patch('/profile', [UserController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('change/{locale}', [LanguageController::class, 'setLocale'])->name('change_language');
