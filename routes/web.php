<?php

use App\Http\Controllers\Admin\Ads_placeholderController;
use App\Http\Controllers\Admin\App_downloadController;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resources(
        [
        'categories' => CategoriesController::class,
        'ads_placeholder' => Ads_placeholderController::class,
        'app_download' => App_downloadController::class,

    ]);
});