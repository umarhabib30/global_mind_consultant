<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
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
        Route::get('/', 'index')->name('team.index');                 // List all team members
        Route::get('/create', 'create')->name('team.create');          // Show create form
        Route::post('/store', 'store')->name('team.store');            // Store new team member
        Route::get('/edit/{id}', 'edit')->name('team.edit');           // Show edit form
        Route::put('/update', 'update')->name('team.update');         // Update team member
        Route::delete('/{id}', 'destroy')->name('team.destroy');       // Delete team member
        Route::get('/{id}', 'show')->name('team.show');               // Show team member details
    });


    // Event Routes

    Route::controller(EventController::class)->prefix('event')->group(function () {
        Route::get('/', 'index')->name('event.index');             // List all events
        Route::get('/create', 'create')->name('event.create');      // Show create form
        Route::post('/store', 'store')->name('event.store');        // Store new event
        Route::get('/edit/{id}', 'edit')->name('event.edit');       // Show edit form
        Route::put('/update', 'update')->name('event.update');      // Update event
        Route::delete('/{id}', 'destroy')->name('event.destroy');   // Delete event
        Route::get('/{id}', 'show')->name('event.show');            // Show event details
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
