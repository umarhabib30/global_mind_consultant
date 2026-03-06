<?php

use App\Http\Controllers\Admin\ConsultationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    AboutFaqController,
    ContactController as AdminContactController,
    DestinationController as AdminDestinationController,
    DestinationFaqsController,
    DashboardController,
    EventController,
    EventReservationController,
    HeroSlideController,
    PopupController,
    PostController,
    ReviewController as AdminReviewController,
    SuccessStoryController as AdminSuccessStoryController,
    TeamController,
    TopFieldController as AdminTopFieldController,
    UniversityController,
};

use App\Http\Controllers\User\{
    HomeController,
    AboutController,
    BlogController,
    ConsultationFormController,
    ContactController,
    DestinationController,
    CourseFilterController,
    EventsController,
    IeltsController,
    ScholarshipController,
    ServicesController,
    SingleBlogController,
    SingleEventController,
    SinglePersonController,
    SuccessStoryController as UserSuccessStoryController,
    ReviewController as UserReviewController,
    TopFieldController as UserTopFieldController,
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
        Route::put('/university/update', 'update')->name('university.update');
        Route::delete('/university/{id}', 'destroy')->name('university.destroy');
    });

    // Destination Routes
    Route::controller(AdminDestinationController::class)->prefix('destination')->group(function () {
        Route::get('/', 'index')->name('destination.index');
        Route::get('/create', 'create')->name('destination.create');
        Route::post('/store', 'store')->name('destination.store');
        Route::get('/edit/{id}', 'edit')->name('destination.edit');
        Route::put('/update', 'update')->name('destination.update');
        Route::delete('/{id}', 'destroy')->name('destination.destroy');
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

    // Admin Event Reservation Routes
    Route::controller(EventReservationController::class)->prefix('event-reservations')->group(function () {
        Route::get('/', 'index')->name('admin.event-reservation.index');
        Route::get('/{id}', 'show')->name('admin.event-reservation.show');
        Route::delete('/{id}', 'destroy')->name('admin.event-reservation.destroy');
    });

    // Destination FAQ Routes
    Route::controller(DestinationFaqsController::class)->prefix('destination-faqs')->group(function () {
        Route::get('/', 'index')->name('destination-faqs.index');
        Route::get('/create', 'create')->name('destination-faqs.create');
        Route::post('/', 'store')->name('destination-faqs.store');
        Route::get('/{id}/edit', 'edit')->name('destination-faqs.edit');
        Route::put('/{id}', 'update')->name('destination-faqs.update');
        Route::delete('/{id}', 'destroy')->name('destination-faqs.destroy');
    });

    // About FAQ Routes
    Route::controller(AboutFaqController::class)->prefix('about-faqs')->group(function () {
        Route::get('/', 'index')->name('about-faqs.index');
        Route::get('/create', 'create')->name('about-faqs.create');
        Route::post('/', 'store')->name('about-faqs.store');
        Route::get('/{id}/edit', 'edit')->name('about-faqs.edit');
        Route::put('/{id}', 'update')->name('about-faqs.update');
        Route::delete('/{id}', 'destroy')->name('about-faqs.destroy');
    });

    // Popup Routes
    Route::controller(PopupController::class)->prefix('popup')->group(function () {
        Route::get('/', 'index')->name('popup.index');
        Route::get('/create', 'create')->name('popup.create');
        Route::post('/store', 'store')->name('popup.store');
        Route::get('/edit/{id}', 'edit')->name('popup.edit');
        Route::put('/update', 'update')->name('popup.update');
        Route::delete('/{id}', 'destroy')->name('popup.destroy');
    });

    // Hero Slider Routes
    Route::controller(HeroSlideController::class)->prefix('hero-slider')->group(function () {
        Route::get('/', 'index')->name('hero-slider.index');
        Route::get('/create', 'create')->name('hero-slider.create');
        Route::post('/store', 'store')->name('hero-slider.store');
        Route::get('/edit/{id}', 'edit')->name('hero-slider.edit');
        Route::put('/update', 'update')->name('hero-slider.update');
        Route::delete('/{id}', 'destroy')->name('hero-slider.destroy');
    });

    // Top Fields Routes
    Route::controller(AdminTopFieldController::class)->prefix('top-field')->group(function () {
        Route::get('/', 'index')->name('top-field.index');
        Route::get('/create', 'create')->name('top-field.create');
        Route::post('/store', 'store')->name('top-field.store');
        Route::get('/details/{id}', 'show')->name('top-field.details');
        Route::get('/edit/{id}', 'edit')->name('top-field.edit');
        Route::post('/update', 'update')->name('top-field.update');
        Route::delete('/{id}', 'destroy')->name('top-field.destroy');
    });

    // Reviews Routes
    Route::controller(AdminReviewController::class)->prefix('reviews')->group(function () {
        Route::get('/', 'index')->name('admin.reviews.index');
        Route::patch('/{id}/approve', 'approve')->name('admin.reviews.approve');
        Route::patch('/{id}/reject', 'reject')->name('admin.reviews.reject');
        Route::delete('/{id}', 'destroy')->name('admin.reviews.destroy');
    });

    // Success Stories Routes
    Route::controller(AdminSuccessStoryController::class)->prefix('success-stories')->group(function () {
        Route::get('/', 'index')->name('admin.success-stories.index');
        Route::get('/create', 'create')->name('admin.success-stories.create');
        Route::post('/store', 'store')->name('admin.success-stories.store');
        Route::get('/edit/{id}', 'edit')->name('admin.success-stories.edit');
        Route::post('/update', 'update')->name('admin.success-stories.update');
        Route::patch('/{id}/toggle-status', 'toggleStatus')->name('admin.success-stories.toggle-status');
        Route::patch('/{id}/toggle-featured', 'toggleFeatured')->name('admin.success-stories.toggle-featured');
        Route::delete('/{id}', 'destroy')->name('admin.success-stories.destroy');
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
Route::get('/single-person/{id}', [SinglePersonController::class, 'show'])->name('single-person.show');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/consultation-form', [ConsultationFormController::class, 'index'])->name('consultation');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/single-event', [SingleEventController::class, 'index'])->name('single-event');
Route::get('/single-event/{id}', [SingleEventController::class, 'show'])->name('single-event.show');
Route::post('/single-event/{id}/reserve', [SingleEventController::class, 'reserve'])->name('single-event.reserve');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/single-blog', [SingleBlogController::class, 'index'])->name('single-blog');
Route::get('/ielts', [IeltsController::class, 'index'])->name('ielts');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/course-filter', [CourseFilterController::class, 'index'])->name('course-filter');
Route::get('/universities', [UniversitiesController::class, 'index'])->name('universities');
Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships');
Route::get('/top-field/{id}', [UserTopFieldController::class, 'show'])->name('top-field.show');
Route::get('/reviews', [UserReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [UserReviewController::class, 'store'])->name('reviews.store');
Route::get('/success-stories', [UserSuccessStoryController::class, 'index'])->name('success-stories.index');
Route::get('/success-stories/{slug}', [UserSuccessStoryController::class, 'show'])->name('success-stories.show');

// Contact Form Submission Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Consultation Form Submission Route
Route::post('/consultation-form', [ConsultationFormController::class, 'store'])->name('consultation.store');
