<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DegreeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\Profile\EducationController;
use App\Http\Controllers\Admin\Profile\TemplateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


    Route::get('redirects',[HomeController::class, 'index']);


Route::group([ 'as' => 'admin.','prefix' => 'admin','middleware' => ['auth']], function() {

    Route::post('update',[UserController::class, 'Update'])->name('update');

    Route::get('profile', [UserController::class , 'Profile'])->name('profile');


      Route::resource('blog', BlogController::class);
      Route::get('blog/details/{slug}',[BlogController::class, 'BlogDetails'])->name('blog.details');


    // Route::resource('degree', DegreeController::class);

});


Route::get('registration',[RegisterController::class,'index'])->name('registration')->middleware('auth');
Route::get('/getCities/{id}',[RegisterController::class,'getCities'])->name('getCities')->middleware('auth');
Route::post('registration_store',[RegisterController::class,'store'])->name('registration_store')->middleware('auth');
Route::post('cart',[EducationController::class,'cart'])->name('cart');
Route::get('/clear',[EducationController::class,'clear'])->name('clear');
Route::get('delete/{id}',[EducationController::class,'delete'])->name('delete');
Route::post('add_edu',[EducationController::class,'add_edu'])->name('add_edu');

Route::post('add_template',[TemplateController::class,'add_template'])->name('add_template')->middleware('auth');
Route::get('fetch-template',[TemplateController::class,'fetch_template'])->name('fetch_template')->middleware('auth');
Route::get('prescription/{id}',[\App\Http\Controllers\Admin\Profile\PrescriptionController::class,'index'])->name('prescription')->middleware('auth');

