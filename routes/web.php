<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AdvanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MdController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('advantage', [AdvanController::class, 'index'])->name('advantage.index');
Route::get('mdmessage', [MdController::class, 'index'])->name('md.index');
Route::get('teams', [TeamController::class, 'index'])->name('team.index');
Route::get('network', [NetworkController::class, 'index'])->name('network.index');
Route::get('service', [ServiceController::class, 'index'])->name('service.index');
Route::get('process', [ProcessController::class, 'index'])->name('process.index');
Route::get('gallery', [ActivitiesController::class, 'index'])->name('gallery.index');

Route::resource('contact', ContactController::class);
Route::resource('gallery', ActivitiesController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);

Route::get('chart', [AboutController::class, 'chart'])->name('chart');

