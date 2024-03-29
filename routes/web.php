<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MenuController;

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

Route::redirect('/', '/admin/menu');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('menu', MenuController::class);
});
