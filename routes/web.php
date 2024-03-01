<?php

use App\Http\Controllers\LanguageController;
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

Route::view('/', 'login.index')->name('login');

Route::prefix('tasks')->group(function () {
	Route::get('/', [TaskController::class, 'index'])->name('admin_panel');
	Route::get('{task}', [TaskController::class, 'edit'])->name('task_details');
	Route::view('create', 'create-task')->name('create_task');
	Route::view('edit', 'edit-task')->name('edit_task');
});

Route::view('profile', 'profile')->name('profile');
Route::get('change/{locale}', [LanguageController::class, 'setLocale'])->name('change_language');
