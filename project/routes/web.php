<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsByCategoryIDController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemsControllers;
use Illuminate\Support\Facades\Auth;

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

Route::controller(HomeController::class)->group(function ()
{
    Route::get('/', 'home');

});

Route::controller(ReviewController::class)->group(function ()
{
    Route::get('/review', 'review')->name('review');

});

Route::controller(CategoryController::class)->group(function ()
{
    Route::post('/category/check', 'category_check');
    Route::get('/category', 'category')->name('category');

});

Route::controller(ItemsByCategoryIDController::class)->group(function ()
{
    Route::get('/itemsByCategoryId/{category_id}', 'itemsByCategoryId');
});

Route::controller(ItemController::class)->group(function ()
{
    Route::get('/item/{item_id}', 'item');
    Route::get('/item/{item_id}/delete', 'itemDelete')->name('itemDelete');
//    Route::post();
});

Route::controller(AboutController::class)->group(function ()
{
    Route::get('/about', 'about');

});

Route::controller(ItemsControllers::class)->group(function ()
{
    Route::get('/items', 'items')->name('items');
    Route::post('/items/check', 'items_check');

});

Route::controller(ReviewController::class)->group(function ()
{
    Route::post('/review/check', 'review_check');
});

Route::controller(RegisterController::class)->group(function () {

    Route::get('/private', [RegisterController::class, 'private'])->middleware('auth')->name('private');



    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('private'));
        }
        return viewWithCategories('registration');
    })->name('registration');

    Route::post('/registration', [RegisterController::class, 'save']);

    Route::get('/login', function ()
    {
        if(Auth::check())
        {
            return redirect(route('private'));
        }
        return viewWithCategories('login');
    })->name('login');

     Route::get('/logout', function (){
         Auth::logout();
         return redirect('/');
     })->name('logout');
});

Route::controller(LoginController::class)->group(function ()
{
    Route::post('/login', [LoginController::class, 'login_check']);
});
