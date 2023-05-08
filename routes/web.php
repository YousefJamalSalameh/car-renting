<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});



//             ............................. ROUTES ARE HERE..........................

Route::get('/test',[HomeController::class,'test'])->name('test');
Route::get('/',[HomeController::class,'index'])->name('home');




//            .............................AdminPanel Routes..............................

Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');
//            .............................Admin Category Routes..............................

Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/show/{id}',[AdminCategoryController::class,'show'])->name('admin_category_show');
Route::get('/admin/category/destroy/{id}',[AdminCategoryController::class,'destroy'])->name('admin_category_destroy');



