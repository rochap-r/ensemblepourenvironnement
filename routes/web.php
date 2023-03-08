<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;

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

//FRONT USER ROUTES
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/blog/index', [BlogController::class,'index'])->name('blog.index');
Route::get('/blog/show', [BlogController::class,'show'])->name('blog.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*ADMIN ROUTES */
Route::prefix('admins')->name('admins.')->middleware(['auth','verified'])->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/profile',[UsersController::class,'profile'])->name('users.profile');
});

//Route::get('/admins', function () {
  //  return view('admin.index');
//})->middleware(['auth', 'verified'])->name('admin');
