<?php

use App\Http\Controllers\CreateTaskController;
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

Route::prefix('admin/panel')->group(function () {
	Route::get('/', [TaskController::class, 'index'])->name('admin_panel');
	Route::view('task', 'admin.task-details')->name('task_details');

	Route::prefix('create')->controller(CreateTaskController::class)->name('create_task')->group(function () {
		Route::get('/', 'index')->name('index');
		Route::post('/', 'store')->name('store');
	});

	Route::view('edit', 'edit-task')->name('tasks.edit');
	Route::view('profile', 'profile')->name('profile');
});

Route::get('change/{locale}', [LanguageController::class, 'setLocale'])->name('change_language');
