<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'DashboardController@index')->name('dashboard.index');
Route::get('admin/icons', 'DashboardController@icons')->name('dashboard.icons');
Route::get('admin/map', 'DashboardController@map')->name('dashboard.map');
Route::get('admin/notification', 'DashboardController@notification')->name('dashboard.notification');
Route::get('admin/profile', 'DashboardController@profile')->name('dashboard.profile');
Route::get('admin/typography', 'DashboardController@typography')->name('dashboard.typography');
Route::get('admin/tables', 'DashboardController@tables')->name('dashboard.tables');
