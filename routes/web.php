<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorsController;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
Route::middleware(['user.role'])->group(function () {

    Route::get('/tutors', [TutorsController::class, "index"])->middleware('auth'); //->middleware('can:isStudent');
    Route::get('/discussions', [DiscussionsController::class, "index"])->middleware('auth');

    Route::get('/tasks', [TasksController::class, "index"])->middleware('auth');
    Route::get('/support', [LanguageController::class, "index"])->middleware('auth');
    Route::get('/profile', [ProfileController::class, "index"])->middleware('auth');
    Route::get('/dashboard', [DashboardController::class, "index"])->middleware('auth');
    Route::get('/details/{id}', [DashboardController::class, "details"])->middleware('auth')->name('session.details');
    Route::get('/tutors/{id}/book', [TutorsController::class, "book"])->middleware('auth');
    Route::get('/tutors/{id}/tutorsdetails', [TutorsController::class, "details"])->middleware('auth')->name('tutor.details');
    Route::get('/taskdetails/{id}', [TasksController::class, "details"])->middleware('auth')->name('task.details');
    Route::get('/pasttaskdetails/{id}', [TasksController::class, "past_task_details"])->middleware('auth')->name('past.task.details');
    Route::get('/download/{task_id}', [TasksController::class, 'download_file'])->name('download.file');
    Route::post('/gradetask/{task_id}', [TasksController::class, 'grade_task'])->name('grade.task');

    Route::get('/discussion/{id}/{id2}', [DiscussionsController::class, "discussion"])->middleware('auth')->name('discussion');

    Route::get('/submitted', [TasksController::class, "tutortaskdetails"])->middleware('auth');
    Route::get('/assign/{id}', [TasksController::class, "tutortaskassign"])->middleware('auth')->name('assign');
    Route::post('/discussion/send-message', [DiscussionsController::class, "sendMessage"])->name('discussion.send_message');
    Route::post('/discussion/send-message-indiv', [DiscussionsController::class, "sendMessageIndiv"])->name('discussion.send_message_indiv');
    Route::post('/profile/add', [ProfileController::class, "add"])->name('profile.add');
    Route::post('/tutorsdetails/book/{id}', [TutorsController::class, "book"])->name('book');
    Route::delete('/profile/{id}', [ProfileController::class, "delete"])->name('session.delete');
    Route::delete('/taskdetails/{id}', [TasksController::class, "delete"])->name('task.delete');
    Route::post('/details/{id}/cancel', [DashboardController::class, "cancel"])->name('session.cancel');
    Route::post('/assign/add/{id}', [TasksController::class, "add"])->name('assign.add');
    Route::post('/upload/{task_id}', [TasksController::class, 'upload'])->name('upload.file');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
