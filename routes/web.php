<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ConsultationFormController;
use App\Http\Controllers\User\CourseFilterController;
use App\Http\Controllers\User\DestinationController;
use App\Http\Controllers\User\EventsController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\SingleBlogController;
use App\Http\Controllers\User\SingleEventController;
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

//DASHBOARD ROUTE
Route::get('admin/dashboard', [DashboardController::class, 'index']);

//TEAM ROUTES
Route::get('admin/team/index', [TeamController::class, 'index'])->name('team.index');
Route::get('admin/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('admin/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('admin/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::post('admin/team/update', [TeamController::class, 'update'])->name('team.update');
Route::get('admin/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
Route::get('admin/team/details/{id}', [TeamController::class, 'show'])->name('team.show');


// EVENT ROUTES
Route::get('admin/event/index', [EventController::class, 'index'])->name('event.index');
Route::get('admin/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('admin/event/store', [EventController::class, 'store'])->name('event.store');
Route::get('admin/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::post('admin/event/update', [EventController::class, 'update'])->name('event.update');
Route::get('admin/event/destroy/{id}', [EventController::class, 'destroy'])->name('event.destroy');
Route::get('admin/event/details/{id}', [EventController::class, 'show'])->name('event.show');



//USER ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/consultation-form', [ConsultationFormController::class, 'index'])->name('consultation');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/single-event', [SingleEventController::class, 'index'])->name('single-event');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/single-blog', [SingleBlogController::class, 'index'])->name('single-blog');
Route::get('/course-filter', [CourseFilterController::class, 'index'])->name('course-filter');
