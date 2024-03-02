<?php

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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
	Route::middleware('guest')->prefix('login')->group(function(){
		Route::get('/', 'index')->name('login');
		Route::post('/', 'login')->name('submit');
	});

	Route::post('logout', 'destroy')->name('logout');
});

Route::middleware('auth')->group(function () {
	Route::get('/', [TaskController::class, 'index'])->name('admin_panel');	

	Route::prefix('tasks')->group(function(){		
		Route::prefix('create')->controller(CreateTaskController::class)->group(function(){
			Route::get('/', 'index')->name('create');
			Route::post('/', 'store')->name('create_task');
		});
		
		Route::prefix('edit')->controller(EditTaskController::class)->group(function(){
			Route::get('{task}', 'index')->name('edit');
			Route::patch('/', 'edit')->name('edit_task');
		});
		
		Route::get('{task}', [TaskController::class, 'show'])->name('task_details');
		Route::delete('{task}', [TaskController::class, 'destroy'])->name('task_delete');

	});

	Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('change/{locale}', [LanguageController::class, 'setLocale'])->name('change_language');
