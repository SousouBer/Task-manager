<?php

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

Route::get('/', function () {
	return view('login.index');
});

Route::get('admin/panel', function () {
	return view('admin.admin-panel');
});

Route::get('/admin/panel/task', function () {
	return view('admin.task-details');
});
