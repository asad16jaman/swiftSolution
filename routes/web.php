<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagemenController;
use App\Http\Controllers\Admin\AuthMessageController;
use App\Http\Controllers\Admin\PhotoGalleryController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'styHellow'])->name('sayhellow');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services/{type}', [HomeController::class, 'ourservice'])->name('our_services');
Route::get('/service/{slug}/detail', [HomeController::class, 'serviceDetail'])->name('services.detail');
Route::post('/service/{slug}/detail', [HomeController::class, 'serviceBook'])->name('services.detail');
Route::get('/teams', [HomeController::class, 'teams'])->name('our_management');
Route::get('/photo-gallery', [HomeController::class, 'photoGallery'])->name('photoGallery');
Route::get('/video-gallery', [HomeController::class, 'videoGallery'])->name('videoGallery');
Route::get('/contact', [HomeController::class, 'contactpage'])->name('contactPage');
Route::post('/contact',[HomeController::class,'saveMessage'])->name('contactPage');
Route::get('/resturant/book', [HomeController::class, 'returantBook'])->name('resturant.book');


Route::prefix('admin')->group(function () {
    Route::get('/login', [DashboardController::class, 'login'])->name('admin.login');
    Route::post('/login', [DashboardController::class, 'authenticate'])->name('admin.login');
    Route::get('/error', [DashboardController::class, 'errorpage'])->name('error');
    //registring admin/users
    Route::get('/register', [DashboardController::class, 'register'])->name('admin.register');
    Route::post('/register', [DashboardController::class, 'store'])->name('admin.register');
});


Route::group(['prefix' => '/admin', 'middleware' => 'checkAdminAuth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
});

Route::group(['prefix' => '/admin', 'middleware' => 'checkAdminAuth', 'as' => 'admin.'], function () {

    //handling users from admin pannel
    Route::get("/users/{id?}", [UsersController::class, "index"])->name("users");
    Route::post("/users/{id?}", [UsersController::class, "storeUser"])->name("users");
    Route::post("/users/{id}/delete", [UsersController::class, "deleteUser"])->name("user.delete");

    //edit user from user side
    Route::get("/users/{id}/edit", [UsersController::class, "editUser"])->name("user.edit");
    Route::post("/users/{id}/edit", [UsersController::class, "editUserStore"])->name("user.edit");

    //slider maintaining url
    Route::get("/sliders/{id?}", [SliderController::class, "index"])->name("slider");
    Route::post("/sliders/{id?}", [SliderController::class, "store"])->name("slider");
    Route::post("/sliders/{id}/delete", [SliderController::class, "destroy"])->name("slider.delete");
    Route::post("/sliders/{id}/status", [SliderController::class, "status"])->name("slider.status");

    //chairman-message
    Route::get('/chairman-message', [AuthMessageController::class, 'index'])->name('ch-message');
    Route::post('/chairman-message', [AuthMessageController::class, 'store'])->name('ch-message');

    //Service url hare
    Route::get("/service/{id?}", [ServiceController::class, "index"])->name("service");
    Route::post("/service/{id?}", [ServiceController::class, "store"])->name("service");
    Route::post("/service/{id}/delete", [ServiceController::class, "destroy"])->name("service.delete");
    Route::post('/s-inhome/{id}', [ServiceController::class, "homeActive"])->name('servicehomeactive');
    Route::post('/service-status/{id}', [ServiceController::class, "status"])->name('servicestatus');

    //Pages url hare
    Route::get('/page/{id?}', [AboutController::class, 'index'])->name('about');
    Route::post('/page/{id?}', [AboutController::class, 'store'])->name('about');
    Route::post('/page/{id}/status', [AboutController::class, 'status'])->name('about.status');
    Route::post("/page/{id}/delete", [AboutController::class, "destroy"])->name("about.delete");


    //Photo Gallery url hare
    Route::get("/photogallery/{id?}", [PhotoGalleryController::class, "index"])->name("photogallery");
    Route::post("/photogallery/{id?}", [PhotoGalleryController::class, "store"])->name("photogallery");
    Route::post("/photogallery/{id}/delete", [PhotoGalleryController::class, "destory"])->name("photogallery.delete");

    //Video Gallery url hare
    Route::get("/videogallery/{id?}", [VideoController::class, "index"])->name("videogallery");
    Route::post("/videogallery/{id?}", [VideoController::class, "store"])->name("videogallery");
    Route::post("/videogallery/{id}/delete", [VideoController::class, "destory"])->name("videogallery.delete");

    //Our Wings url hare
    Route::get("/wings/{id?}", [WingsController::class, "index"])->name("wings");
    Route::post("/wings/{id?}", [WingsController::class, "store"])->name("wings");
    Route::post("/wings/{id}/delete", [WingsController::class, "destory"])->name("wings.delete");

    Route::post('/inhome/{id}', [WingsController::class, "homeActive"])->name('homeactive');
    Route::post('/wings-status/{id}', [WingsController::class, "status"])->name('winstatus');

    //Managment url hare
    Route::get('/manage/{id?}', [ManagemenController::class, 'index'])->name('management');
    Route::post('/manage/{id?}', [ManagemenController::class, 'store'])->name('management');
    Route::post('/management/{id}/delete', [ManagemenController::class, 'destroy'])->name('management.delete');

    //Contact url hare
    Route::get('/contact', [ContactController::class, 'index'])->name('message');
    Route::post('/contact/{id}', [ContactController::class, 'destroy'])->name('message.delete');

    //Contact url hare
    Route::get('/book', [ContactController::class, 'book'])->name('book');
    Route::post('/book/{id}', [ContactController::class, 'bookdestroy'])->name('book.delete');

    //feedback maintaining url
    Route::get("/feedback/{id?}", [FeedbackController::class, "index"])->name("feedback");
    Route::post("/feedback/{id?}", [FeedbackController::class, "store"])->name("feedback");
    Route::post("/feedback/{id}/delete", [FeedbackController::class, "destroy"])->name("feedback.delete");

    //company maintain url
    Route::get("/company", [CompanyController::class, "index"])->name("company");
    Route::post("/company", [CompanyController::class, "create"])->name("company");

    //admin logout
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::get('link', function () {
    Artisan::call('storage:link');
    return 'Done';
});


