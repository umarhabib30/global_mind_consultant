<?php

use App\Http\Controllers\Admin\ConsultationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    ContactController as AdminContactController,
    DashboardController,
    EventController,
    PostController,
    TeamController,
    UniversityController
};

use App\Http\Controllers\User\{
    HomeController,
    AboutController,
    BlogController,
    ConsultationFormController,
    ContactController,
    CourseFilterController,
    DestinationController,
    EventsController,
    IeltsController,
    ScholarshipController,
    ServicesController,
    SingleBlogController,
    SingleEventController,
    SinglePersonController,
    UniversitiesController
};

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Team Routes
    // Team Routes
    Route::controller(TeamController::class)->prefix('team')->group(function () {
        Route::get('/', 'index')->name('team.index');
        Route::get('/create', 'create')->name('team.create');
        Route::post('/store', 'store')->name('team.store');
        Route::get('/edit/{id}', 'edit')->name('team.edit');
        Route::put('/update', 'update')->name('team.update');
        Route::delete('/{id}', 'destroy')->name('team.destroy');
        Route::get('/{id}', 'show')->name('team.show');
    });


    // Event Routes

    Route::controller(EventController::class)->prefix('event')->group(function () {
        Route::get('/', 'index')->name('event.index');
        Route::get('/create', 'create')->name('event.create');
        Route::post('/store', 'store')->name('event.store');
        Route::get('/edit/{id}', 'edit')->name('event.edit');
        Route::put('/update', 'update')->name('event.update');
        Route::delete('/{id}', 'destroy')->name('event.destroy');
        Route::get('/{id}', 'show')->name('event.show');
    });

    // University Routes
    Route::controller(UniversityController::class)->group(function () {
        Route::get('/university', 'index')->name('university.index');
        Route::get('/university/create', 'create')->name('university.create');
        Route::post('/university/store', 'store')->name('university.store');
        Route::get('/university/edit/{id}', 'edit')->name('university.edit');
        Route::post('/university/update', 'update')->name('university.update');
        Route::get('/university/delete/{id}', 'destroy')->name('university.destroy');
    });

    // Admin Blog Routes
    Route::prefix('blog')->group(function () {
        Route::resource('posts', PostController::class);
    });
    // Admin Contact Messages Routes
    Route::controller(AdminContactController::class)->prefix('contact-messages')->group(function () {
        Route::get('/', 'index')->name('admin.contact.index');
        Route::get('/{id}', 'show')->name('admin.contact.show'); // Added Show Route
        Route::delete('/{id}', 'destroy')->name('admin.contact.destroy');
    });
    //// Admin Consultation Bookings Routes
    Route::controller(ConsultationController::class)->prefix('consultations')->group(function () {
        Route::get('/', 'index')->name('admin.consultation.index');
        Route::get('/{id}', 'show')->name('admin.consultation.show'); // Add this line
        Route::delete('/{id}', 'destroy')->name('admin.consultation.destroy');
    });
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/single-person', [SinglePersonController::class, 'index'])->name('single-person');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/consultation-form', [ConsultationFormController::class, 'index'])->name('consultation');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/single-event', [SingleEventController::class, 'index'])->name('single-event');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/single-blog', [SingleBlogController::class, 'index'])->name('single-blog');
Route::get('/ielts', [IeltsController::class, 'index'])->name('ielts');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/course-filter', [CourseFilterController::class, 'index'])->name('course-filter');
Route::get('/universities', [UniversitiesController::class, 'index'])->name('universities');
Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships');

// Contact Form Submission Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Consultation Form Submission Route
Route::post('/consultation-form', [ConsultationFormController::class, 'store'])->name('consultation.store');
