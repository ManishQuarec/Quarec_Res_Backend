<?php
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\JobPositionController;
use App\Http\Controllers\Auth\ReviewController;
use App\Http\Controllers\Auth\ContactController;
use App\Http\Controllers\Auth\ResumeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Auth\PortfolioController;
use App\Http\Controllers\Auth\CurrentOpeningcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

    /**
     * Register Routes
     */
    Route::get('/register',  [LoginController::class, 'register'])->name('register');
    Route::post('/registration',  [LoginController::class, 'registration'])->name('registration');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginPost', [LoginController::class, 'LoginPost']);

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::resource('auth/admin-users', UserController::class);
    Route::resource('auth/roles', RoleController::class);
    Route::resource('auth/permissions', PermissionController::class);

    // Resume routes Start
    Route::get('auth/resume', [ResumeController::class, 'index']);
    Route::get('download/{id}', [ResumeController::class, 'downloadFile'])->name('resume.download');
    Route::get('auth/resume/create', [ResumeController::class, 'create']);
    Route::post('auth/resume/store', [ResumeController::class, 'Store']);
    Route::get('auth/resume/show/{id}', [ResumeController::class, 'show']);
    Route::get('auth/resume/edit/{id}', [ResumeController::class, 'Edit']);
    Route::put('auth/resume/update/{id}', [ResumeController::class, 'Update']);
    Route::delete('auth/resume/delete/{id}', [ResumeController::class, 'Delete']);
    // Resume Routes Ends
    
    Route::resource('auth/posts', PostController::class);
    Route::resource('auth/category', CategoryController::class);
    Route::resource('auth/position', JobPositionController::class);
    Route::resource('auth/review', ReviewController::class);
    Route::resource('auth/contact', ContactController::class);
    Route::resource('auth/portfolio', PortfolioController::class);
    Route::resource('auth/current_opening', CurrentOpeningcontroller::class);

    Route::get('/profile/{id}', [AdminController::class, 'getProfile'])->name('settings.profile');
    Route::post('/profile/{id}', [AdminController::class, 'updateProfile'])->name('update.profile');
    Route::get('/change-password', [ AdminController::class, 'changePassword',])->name('change-password');
    Route::post('/change-password', [AdminController::class, 'updatePassword'])->name('update-password');

});




