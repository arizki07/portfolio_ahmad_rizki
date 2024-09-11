<?php

use App\Http\Controllers\_01Master\EducationController;
use App\Http\Controllers\_01Master\ExperienceController;
use App\Http\Controllers\_01Master\ProjectController;
use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Datatables\EducationList;
use App\Http\Controllers\Datatables\ExperienceList;
use App\Http\Controllers\Datatables\ProjectList;
use App\Http\Controllers\Landing;
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

Route::resource('getExperience', ExperienceList::class);
Route::resource('getProject', ProjectList::class);
Route::resource('getEducation', EducationList::class);

Route::controller(Landing::class)->group(function () {
    Route::get('/', 'index');
    Route::get('about', 'about');
    Route::get('maintenance', 'maintenance');
});

Route::controller(Authentication::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login-post', 'authenticate')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::controller(Dashboard::class)->group(function () {
        Route::get('dashboard', 'index');
        Route::post('/user/update-photo', 'updatePhoto')->name('user.updatePhoto');
    });

    Route::controller(EducationController::class)->group(function () {
        Route::get('education', 'educate');
        Route::post('education-store', 'store')->name('education.store');
    });

    Route::controller(ExperienceController::class)->group(function () {
        Route::get('experience', 'experience');
        Route::get('experience/edit/{id}', 'edit')->name('experience.edit');
        Route::post('experience-store', 'store')->name('experience.store');
        Route::post('experience/update/{id}', 'update')->name('experience.update');
    });

    Route::controller(ProjectController::class)->group(function () {
        Route::get('project', 'project');
        Route::get('project/edit/{id}', 'edit')->name('project.edit');
        Route::post('project-store', 'store')->name('project.store');
        Route::post('project/update/{id}', 'update')->name('project.update');
    });
});
