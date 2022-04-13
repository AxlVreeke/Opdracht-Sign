<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ExercisesController;
use App\Models\Job;
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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/opdrachten/filter', [\App\Http\Controllers\SearchController::class, 'filterOpdracht'])->name('filter-opdracht');

Route::get('/uitleg', [PagesController::class, 'uitleg'])->name('uitleg');

Route::get('/opdrachten', [PagesController::class, 'opdrachten'])->name('opdrachten');

Route::group(['prefix' => 'exercises', 'middleware' => 'auth'], function() {
    Route::resource('exercises', ExercisesController::class);
    Route::get('participate/{id}', [ExercisesController::class, 'participate'])->name('exercises.participate');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function (){
    Route::resource('admin', \App\Http\Controllers\UsersController::class);
});

require __DIR__.'/auth.php';
