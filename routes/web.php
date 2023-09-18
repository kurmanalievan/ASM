<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorsController;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;

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
// Route::get('/tutors', function () {
//     return view('tutors.tutors');
// });
Route::get('/tutors', [TutorsController::class, "index"])->middleware('auth');
Route::get('/discussions', [DiscussionsController::class, "index"])->middleware('auth');
Route::get('/tasks', [TasksController::class, "index"])->middleware('auth');
Route::get('/support', [LanguageController::class, "index"])->middleware('auth');
Route::get('/profile', [ProfileController::class, "index"])->middleware('auth');
Route::get('/tutors/{id}/book', [TutorsController::class, "book"])->middleware('auth');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
