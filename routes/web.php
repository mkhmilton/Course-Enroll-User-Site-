<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserAuthController;


    
   




    Route::get('/', [SiteController::class,'showHome']);
    Route::get('/about',[SiteController::class,'showAbout']);
    Route::get('/service',[SiteController::class,'showService']);
    Route::get('/portfolio', [SiteController::class,'showPortfolio']);
    Route::get('/reset', [SiteController::class,'resetPassword']);
    Route::get('/classroom', [SiteController::class,'classroom'])->middleware('isLogged');
    Route::get('/logout', [UserAuthController::class,'Logout']);
    Route::get('status/{id}', [UserAuthController::class,'status'])->name('status');

    Route::get('/login', [UserAuthController::class,'showLogin'])->middleware('AlreadyLoggedIn');
    Route::get('/register', [UserAuthController::class,'showRegister'])->middleware('AlreadyLoggedIn');
    Route::get('/profile',[UserAuthController::class,'profile'])->middleware('isLogged');
    Route::get('/userprofile',[UserAuthController::class,'UserProfile'])->middleware('isLogged');

    Route::post('/create' ,[UserAuthController::class,'create'])->name('create');
    Route::post('/check' ,[UserAuthController::class,'check'])->name('check');




