<?php

use App\Http\Controllers\candidateProfileController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\lowonganController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\WishlistController;
use Illuminate\Routing\Controllers\Middleware;
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



Route::group(['middleware'=>'guest'],function(){

    //home
    Route::get('/', [HomeController::class, 'nonregis']);



    //registrasi user candidate
    Route::controller(registrationController::class)->group(function(){
        Route::get("/registrationCandidate","index");
        Route::post("/registrationCandidate","registrationCandidate");
    });

    //login candidate
    Route::controller(loginController::class)->group(function(){
        Route::get("/loginCandidate","index")->name('login.index');
        Route::post("/loginCandidate","authentication")->name('login.process');
    });
});


Route::group(['middleware'=>'auth'],function(){
    //home regis kandidat

    //profile kandidat
    Route::controller(candidateProfileController::class)->group(function(){
        Route::get("/profile","index")->name('profile.index');
        Route::post("/profile/update","updateProfileCandidate")->name('update.profile.candidate');
        Route::get("/profile/resume","indexResume")->name('profile.index.resume');
        Route::post("/profile/resume/update","updateResume")->name('update.profile.resume.candidate');
        Route::get("/profile/joblist","indexJobList")->name('profile.index.joblist');

    });
    // web.php

    Route::post('/wishlist/toggle/{id}', [WishlistController::class, 'toggleBookmark'])->name('wishlist.toggleBookmark');
    Route::post('/wishlist/add/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist.view');
    Route::get('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');


    Route::get('/home', [HomeController::class, 'regis'])->name('homeregis');

    //logout
    Route::get('/logout', [LoginController::class, 'logoutCandidate'])->name('logout');

});

Route::get('/lowongan', [lowonganController::class, 'index'])->name('lowongan');
Route::get('/lowongan/search', [lowonganController::class, 'search'])->name('search');

