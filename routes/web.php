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
Route::get('/tutors', [TutorsController::class, "index"]);
Route::get('/discussions', [DiscussionsController::class, "index"]);
Route::get('/tasks', [TasksController::class, "index"]);
Route::get('/support', [LanguageController::class, "index"]);
Route::get('/profile', [ProfileController::class, "index"]);
Route::get('/tutors/{id}/book', [TutorsController::class, "book"]);





