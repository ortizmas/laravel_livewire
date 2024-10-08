<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('livewire.teste');
// });

Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('projects.show');
