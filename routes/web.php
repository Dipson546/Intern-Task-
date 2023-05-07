<?php

use App\Http\Controllers\back\AboutController;
use App\Http\Controllers\Back\CategoriesController;
use App\Http\Controllers\Back\DashboadController;
use App\Http\Controllers\Back\HomeSliderController;
use App\Http\Controllers\back\LoginController;
use App\Http\Controllers\Back\MovieControler;
use App\Http\Controllers\Back\PasswordController;
use App\Http\Controllers\Back\ProductsController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\ReviewsController;
use App\Http\Controllers\Back\UsersController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\ProfileController as FrontProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('cms/dashboard', [DashboadController::class, 'index'])->middleware('auth:cms')->name('dashboard.index');

Route::get('cms/profile', [ProfileController::class, 'edit'])->name('back.profile.edit');

Route::post('cms/profile', [ProfileController::class, 'update'])->name('back.profile.update')->middleware('auth:cms');

Route::get('cms/login', [LoginController::class, 'showLoginForm'])->name('back.login.show');

Route::post('cms/login', [LoginController::class, 'login'])->name('back.login.login');

Route::get('cms/logout', [LoginController::class, 'logout'])->name('back.logout')->Middleware('auth:cms');


Route::get('cms/password', [PasswordController::class, 'edit'])->middleware('auth:cms')->name('back.password.edit');

Route::post('cms/password', [PasswordController::class, 'update'])->middleware('auth:cms')->name('back.password.update');






Route::name('front.')->group(function () {





    Route::controller(CartController::class)->group(function () {
        Route::get('/carts', 'index')->name('cart.index');
        Route::match(['put', 'patch'], '/cart', 'update')->name('cart.update');
    });

    Route::controller(FrontProfileController::class)->group(function () {
        Route::get('/prrofile', 'index')->name('profile.index');
        Route::post('/prrofile/edit', 'edit')->name('profile.edit');
        Route::post('/prrofile/password', 'password')->name('profile.password');
    })->middleware('auth');
});






Route::controller(UsersController::class)->group(function () {

    Route::get('users', 'index')->name('back.users.index');
    Route::get('Udelete/{user}', 'destroy')->name('back.users.destroy');
});



Route::get('cms/movie', [MovieControler::class, 'index'])->name('back.movie.index');
Route::get('cms/cmovie', [MovieControler::class, 'create'])->name('back.movie.create');
Route::post('cms/smovie', [MovieControler::class, 'store'])->name('back.movie.store');
Route::get('cms/editmovie/{movie}', [MovieControler::class, 'edit'])->name('back.movie.edit');
Route::post('cms/editmovie/{movie}', [MovieControler::class, 'update'])->name('back.movie.update');
Route::get('cms/pdelete/{movie}', [MovieControler::class, 'destroy'])->name('back.movie.destroy');

Auth::routes();
