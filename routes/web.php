<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::controller(ProjectController::class)->group(function(){
    Route::get('/project', 'index')->name('project.index');
    Route::get('/project/create', 'create')->name('project.create');
    Route::post('/project/store', 'store')->name('project.store');
    Route::get('/project/{project}/show', 'show')->name('project.show');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/student/create/{project}', 'create')->name('student.create');
    Route::post('/student/store/{project}', 'store')->name('student.store');
    Route::delete('/student/{student}/delete', 'destroy')->name('student.destroy');
});

Route::controller(GroupController::class)->group(function(){
    Route::post('/group/store', 'store')->name('group.store');

});


