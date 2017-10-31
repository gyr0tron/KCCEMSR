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

Route::get("/test", function() {
  // dd(App\Department::all());
  foreach(App\Department::all() as $user)
  {
    echo $user->nane;
  }
});

Route::get('/',"HomeController@getHome");

Route::get('/login','Auth\LoginController@getLogin')->name("admin_login")->name("login");
Route::get('/login','Auth\LoginController@getLogin')->name("login");
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout')->name("admin_logout");

Route::get('/admin/dashboard','Admin\DashboardController@home')->name("admin_dashboard");
Route::get('/admin/users','Admin\DashboardController@users')->name("admin_users");
Route::get('/admin/users/edit/{id}','Admin\DashboardController@edituser')->name("admin_edituser");
Route::get('/admin/settings','Admin\DashboardController@settings')->name("admin_settings");


// API
Route::post("/api/admin/adduser","Admin\DashboardApiController@addUser");
Route::post("/api/admin/edituser","Admin\DashboardApiController@editUser");
Route::post("/api/admin/removeuser","Admin\DashboardApiController@removeUser");
Route::post("/api/admin/usersettings","Admin\DashboardApiController@userSettings");
