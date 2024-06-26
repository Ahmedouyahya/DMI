<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SpesialiteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AlgorithmController;
use App\Models\Student;

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

// Route to generate PDF
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

// Public routes accessible to all users
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/user-profile', [InfoUserController::class, 'create'])->name('user.profile');
    Route::post('/user-profile', [InfoUserController::class, 'store'])->name('user.profile.update');

    // Profile update route
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Dashboard route
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Routes accessible only to admin
Route::middleware(['auth', 'admin'])->group(function () {
    // User management routes
    Route::resource('users', UserController::class);

    // Billing management route
    Route::get('billing', function () {
        return view('billing');
    })->name('billing');

    // Tables route
    Route::get('tables', function () {
        $students = Student::all();
        return view('tables', compact('students'));
    })->name('tables');


    //tablbe student crud
    Route::resource('students', StudentController::class);
    Route::get('run-algorithm', [AlgorithmController::class, 'runAlgorithm'])->name('run-algorithm');



    // Virtual reality route
    Route::get('virtual-reality', function () {
        return view('virtual-reality');
    })->name('virtual-reality');

    // Speciality CRUD
    Route::resource('spesialite', SpesialiteController::class);
});

// Guest routes (accessible only when not authenticated)
Route::middleware('guest')->group(function () {
    // Registration routes
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    // Login routes
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);

    // Forgot password routes
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);

    // Reset password routes
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

// Login view route
Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

// Logout route
Route::get('/logout', [SessionsController::class, 'destroy']);
