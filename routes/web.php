<?php


use App\Http\Controllers\backend\AboutController;

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\FrequentController;
use App\Http\Controllers\backend\PakageController;
use App\Http\Controllers\backend\PolicyController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\TconditionController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;




Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/package', [FrontendController::class, 'package'])->name('package');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/package/order/{id}', [FrontendController::class, 'order'])->name('package.order');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('users', UserController::class);
Route::middleware(['admin'])->group(function () {
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::resource('banners', BannerController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('packages', PakageController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('frequents', FrequentController::class);
    Route::resource('tconditons', TconditionController::class);
    Route::resource('policies', PolicyController::class);
    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
});
