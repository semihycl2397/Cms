<?php

use App\Http\Controllers\panel\AnnouncementController;
use App\Http\Controllers\panel\CommunicationController;
use App\Http\Controllers\panel\DocumentController;
use App\Http\Controllers\panel\ImageController;
use App\Http\Controllers\panel\LoginController;
use App\Http\Controllers\panel\MenusController;
use App\Http\Controllers\panel\NewsController;
use App\Http\Controllers\panel\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenemeController;
use App\Http\Controllers\panel\SiteConfigController;
/*
Route::get('/', function () {
    return view('welcome');
});*/

    Route::prefix('/admin')->group(function () {
        Route::get('/', [DenemeController::class, 'app'])->name('layout.app');

    Route::prefix('/site-config')->group(function () {
        Route::get('/', [SiteConfigController::class, 'index'])->name('siteconfig.index');
        Route::post('/submit', [SiteConfigController::class, 'create'])->name('submit');
    });
    Route::prefix('/communication')->group(function () {
        Route::get('/message-list', [CommunicationController::class, 'index'])->name('Communication.index');
    });

    Route::prefix('/menus')->group(function () {
        Route::get('/list', [MenusController::class, 'index'])->name('Menus.index');
        Route::get('/add', [MenusController::class, 'app'])->name('Menus.create');
    });

    Route::prefix('/news')->group(function () {
        Route::get('/list', [NewsController::class, 'index'])->name('News.index');
        Route::get('/add', [NewsController::class, 'app'])->name('News.create');
    });

    Route::prefix('/announcements')->group(function () {
        Route::get('/list', [AnnouncementController::class, 'index'])->name('Announcements.index');
        Route::get('/add', [AnnouncementController::class, 'app'])->name('Announcements.create');
    });
    Route::prefix('/documents')->group(function () {
        Route::get('/list', [DocumentController::class, 'index'])->name('Documents.index');
        Route::get('/add', [DocumentController::class, 'app'])->name('Documents.create');
    });

        Route::group(['prefix' => 'images'], function () {
            Route::get('/list', [ImageController::class, 'index'])->name('Images.index');
            Route::get('/add', [ImageController::class, 'app'])->name('Images.create');
            Route::post('/add', [ImageController::class, 'createImage'])->name('post.image');

            Route::group(['prefix' => 'album'], function () {
                Route::get('/list', [ImageController::class, 'apply'])->name('Images.albindex');
                Route::get('/add', [ImageController::class, 'apple'])->name('Images.albcreate');
            });
    });

        Route::group(['prefix' => 'videos'], function () {
            Route::get('/list', [VideoController::class, 'index'])->name('Videos.index');
            Route::get('/add', [VideoController::class, 'app'])->name('Videos.create');
            Route::post('/add', [VideoController::class, 'createVideo'])->name('post.video');

            Route::group(['prefix' => 'album'], function () {
                Route::get('/list', [VideoController::class, 'apply'])->name('Videos.albindex');
                Route::get('/add', [VideoController::class, 'apple'])->name('Videos.albcreate');
            });
    });
        Route::prefix('/login')->group(function () {
            Route::get('/login.', [LoginController::class, 'index'])->name('Login.index');
});
    });

