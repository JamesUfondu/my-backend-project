<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

//Routing For the pages
Route::get('pages/index', 'DashboardController@dash');
Route::get('pages/404', 'PagesController@error');
Route::get('pages/basic_table', 'TablesController@table');
Route::get('pages/blank', 'PagesController@blank');
Route::get('pages/buttons', 'UIController@button');
Route::get('pages/chart-chartjs', 'ChartsController@chart');
Route::get('pages/contact', 'PagesController@contact');
Route::get('pages/form_component','FormsController@form1');
Route::get('pages/form_validation', 'FormsController@form2');
Route::get('pages/general', 'UIController@element');
Route::get('pages/grids', 'UIController@grids');
Route::get('pages/login', 'PagesController@login');
Route::get('pages/profile', 'PagesController@profile');
Route::get('pages/widgets', 'WidgetsController@widgets');
