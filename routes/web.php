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
Route::get('/tasks',\App\Livewire\TaskIndex::class)->name('tasks');
Route::get('/tasks/create', \App\Livewire\TaskCreate::class);
Route::get('/tasks/{task}', \App\Livewire\TaskShow::class);
