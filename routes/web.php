<?php

use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\ProductController as AdminProductsController;


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
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/login',[\App\Http\Controllers\UserController::class,'loginview'])->name('loginview');
Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::get('/register',[\App\Http\Controllers\UserController::class,'registerview'])->name('registerview');
Route::post('/register',[\App\Http\Controllers\UserController::class,'register'])->name('register');

// new route
Route::get('/products',[HomeController::class,'products'])->name('products');
Route::get('/detail/{pid}',[HomeController::class,'detail'])->name('detail');





//            .............................AdminPanel Routes..............................
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/',[AdminHomeController::class,'index'])->name('index');
//            .............................Admin Category Routes..............................
    Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    //            .............................Admin Product Routes..............................

    Route::prefix('product')->name('product.')->controller(AdminProductsController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    //            .............................Admin Image Routes..............................
    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });
});
