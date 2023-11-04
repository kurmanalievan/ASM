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
// Route::get('/tutors', function () {
//     return view('tutors.tutors');
// });
Route::middleware(['user.role'])->group(function () {

    // Route::group(['middleware' => 'user.role:tutor'], function () {
    //     Route::get('/tutor/dashboard', [DashboardController::class, "tutorr"])->name('tutor.dashboard');
    // });

    // Route::group(['middleware' => 'user.role:student'], function () {
    //     Route::get('/student/dashboard', [DashboardController::class, "index"])->name('student.dashboard');
    // });


    // Define your routes here that require role-based views
    Route::get('/tutors', [TutorsController::class, "index"])->middleware('auth'); //->middleware('can:isStudent');
    Route::get('/discussions', [DiscussionsController::class, "index"])->middleware('auth');
    // Route::get('/tutor', [ProfileController::class, "tutor"])->middleware('auth');
    // Route::get('/tutorslist', [TutorsController::class, "tutorslist"])->middleware('auth');
    Route::get('/tasks', [TasksController::class, "index"])->middleware('auth');
    Route::get('/support', [LanguageController::class, "index"])->middleware('auth');
    Route::get('/profile', [ProfileController::class, "index"])->middleware('auth');
    Route::get('/dashboard', [DashboardController::class, "index"])->middleware('auth');
    Route::get('/details/{id}', [DashboardController::class, "details"])->middleware('auth')->name('session.details');
    Route::get('/tutors/{id}/book', [TutorsController::class, "book"])->middleware('auth');
    Route::get('/tutors/{id}/tutorsdetails', [TutorsController::class, "details"])->middleware('auth')->name('tutor.details');
    Route::get('/taskdetails/{id}', [TasksController::class, "details"])->middleware('auth')->name('task.details');
    Route::get('/discussion', [DiscussionsController::class, "discussion"])->middleware('auth');
    // Route::get('/tutortasks', [TasksController::class, "tutortasks"])->middleware('auth');
    // Route::get('/profiletutor', [ProfileController::class, "tutor"])->middleware('auth');
    Route::get('/submitted', [TasksController::class, "tutortaskdetails"])->middleware('auth');
    Route::get('/assign', [TasksController::class, "tutortaskassign"])->middleware('auth');
    // Route::get('/tutordashboard', [DashboardController::class, "tutordashboard"])->middleware('auth');
    // Route::get('/tutordis\cussions', [DiscussionsController::class, "tutordiscussions"])->middleware('auth');
    // Route::get('/tutordiscussion', [DiscussionsController::class, "tutordiscussion"])->middleware('auth');
    Route::post('/discussion/send-message', [DiscussionsController::class, "sendMessage"])->name('discussion.send_message');
    Route::post('/profile/add', [ProfileController::class, "add"])->name('profile.add');
    Route::post('/tutorsdetails/book', [TutorsController::class, "book"])->name('book');
    // Add more routes specific to tutors or students as needed
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
