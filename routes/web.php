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

});

// SITE
Route::get('/',"HomeController@getHome");
Route::get('/department/{name}','DepartmentController@get')->name('department');


// DASHBOARD

Route::get('/login','Auth\LoginController@getLogin')->name("admin_login")->name("login");
Route::get('/login','Auth\LoginController@getLogin')->name("login");
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout')->name("admin_logout");

Route::get('/admin','Admin\DashboardController@home');
Route::get('/admin/dashboard','Admin\DashboardController@home')->name("admin_dashboard");
Route::get('/admin/carousel','Admin\DashboardController@carousel')->name("admin_carousel");
Route::get('/admin/carousel/edit/image/{id}','Admin\DashboardController@editcoarouselimage')->name("admin_editcarouselimage");
Route::get('/admin/users','Admin\DashboardController@users')->name("admin_users");
Route::get('/admin/users/edit/{id}','Admin\DashboardController@edituser')->name("admin_edituser");
Route::get('/admin/settings','Admin\DashboardController@settings')->name("admin_settings");
Route::get('/admin/events','Admin\DashboardController@events')->name("admin_events");
Route::get('/admin/events/new','Admin\DashboardController@newevent')->name("admin_newevent");
Route::get('/admin/events/edit/{id}','Admin\DashboardController@editevent')->name("admin_editevent");

Route::get('/admin/update','Admin\UpdateController@update')->name("admin_update");


// API SITE
Route::get('/api/home/carousel/','HomeController@getCarousel');

// API ADMIN
Route::post("/api/admin/adduser","Admin\DashboardApiController@addUser");
Route::post("/api/admin/edituser","Admin\DashboardApiController@editUser");
Route::post("/api/admin/removeuser","Admin\DashboardApiController@removeUser");
Route::post("/api/admin/usersettings","Admin\DashboardApiController@userSettings");
Route::post("/api/admin/carousel/newimage","Admin\DashboardApiController@addCarouselImage");
Route::post("/api/admin/carousel/editimage","Admin\DashboardApiController@editCarouselImage");
Route::post("/api/admin/carousel/removeimage","Admin\DashboardApiController@removeCarouselImage");
Route::post("/api/admin/events/add","Admin\DashboardApiController@addEvent");
Route::post("/api/admin/events/edit","Admin\DashboardApiController@editEvent");
Route::post("/api/admin/events/remove","Admin\DashboardApiController@removeEvent");
Route::post("/api/admin/events/edit/removeimage","Admin\DashboardApiController@editEventRemoveImage");
