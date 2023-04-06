<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnboardingController;
use App\Http\Middleware\Authenticate;

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




// show register create form
Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/', [OnboardingController::class, 'general'])->name('general');
        Route::get('/part', [OnboardingController::class, 'part'])->name('part');
        Route::get('/demo', [OnboardingController::class, 'demo'])->name('demo');
        Route::get('/about', [OnboardingController::class, 'about'])->name('about');

    });
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/inscription', [AuthController::class, 'create'])->name('onboard');
Route::post('/user', [AuthController::class, 'store']);



//check the choice
Route::get('/choix1', [AuthController::class, 'onboard1'])->name('onboard1')->middleware('auth');
Route::get('/choix2', [AuthController::class, 'onboard2'])->name('onboard2')->middleware('auth');
Route::get('/choix3', [AuthController::class, 'onboard3'])->name('onboard3')->middleware('auth');

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
//connecter
Route::get('/enseignements', [AuthController::class, 'accueil'])->name('accueil')->middleware('auth');
Route::get('/courstest', [OnboardingController::class, 'lessontest'])->name('lessontest');

Route::get('/enseignements/lecons', [AuthController::class, 'lesson'])->name('lesson')->middleware('auth')->middleware('auth');
Route::get('/enseignements/lecons/ressource', [AuthController::class, 'ressource'])->name('ressource')->middleware('auth');
Route::get('/enseignements/lecons/course', [AuthController::class, 'course'])->name('course')->middleware('auth');
Route::get('/a-propos-de-nous', [OnboardingController::class, 'about'])->name('about');
;
Route::get('/payment', [AuthController::class, 'payment'])->name('payment');

Route::get('/resexemple', [OnboardingController::class, 'resexemple'])->name('resexemple')->middleware('auth');
Route::get('/resexemple2', [OnboardingController::class, 'resexemple2'])->name('resexemple2')->middleware('auth');
Route::get('/resexemple3', [OnboardingController::class, 'resexemple3'])->name('resexemple3')->middleware('auth');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
