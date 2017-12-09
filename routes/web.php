<?php

use App\Http\Middleware\MaintenanceCheck;

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

// SITE
Route::middleware([MaintenanceCheck::class])->group(function () {
  Route::get('/',"HomeController@getHome");
  Route::get('/department/{name}','DepartmentController@get')->name('department');
});



// DASHBOARD

Route::get('/login','Auth\LoginController@getLogin')->name("admin_login")->name("login");
Route::get('/login','Auth\LoginController@getLogin')->name("login");
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout')->name("admin_logout");

Route::prefix('admin')->group(function () {
  Route::get('/','Admin\DashboardController@home');
  Route::get('/dashboard','Admin\DashboardController@home')->name("admin_dashboard");
  Route::get('/carousel','Admin\DashboardController@carousel')->name("admin_carousel");
  Route::get('/carousel/edit/image/{id}','Admin\DashboardController@editcoarouselimage')->name("admin_editcarouselimage");
  Route::get('/users','Admin\DashboardController@users')->name("admin_users");
  Route::get('/users/edit/{id}','Admin\DashboardController@edituser')->name("admin_edituser");
  Route::get('/settings','Admin\DashboardController@settings')->name("admin_settings");
  Route::get('/events','Admin\DashboardController@events')->name("admin_events");
  Route::get('/events/new','Admin\DashboardController@newevent')->name("admin_newevent");
  Route::get('/events/edit/{id}','Admin\DashboardController@editevent')->name("admin_editevent");
  Route::get('/messages','Admin\DashboardController@messages')->name("admin_messages");
  Route::get('/department/{url}/{action}','Admin\DashboardController@department')->name("admin_department");
});






// API SITE
Route::prefix('/api')->group(function () {
  Route::get('/home/carousel/','HomeController@getCarousel');
  Route::post('/contact/send',"HomeController@sendContact");
});


// API ADMIN
Route::prefix('/api/admin')->group(function () {
  Route::post("/adduser","Admin\DashboardApiController@addUser");
  Route::post("/edituser","Admin\DashboardApiController@editUser");
  Route::post("/removeuser","Admin\DashboardApiController@removeUser");
  Route::post("/usersettings","Admin\DashboardApiController@userSettings");
  Route::post("/carousel/newimage","Admin\DashboardApiController@addCarouselImage");
  Route::post("/carousel/editimage","Admin\DashboardApiController@editCarouselImage");
  Route::post("/carousel/removeimage","Admin\DashboardApiController@removeCarouselImage");
  Route::post("/events/add","Admin\DashboardApiController@addEvent");
  Route::post("/events/edit","Admin\DashboardApiController@editEvent");
  Route::post("/events/remove","Admin\DashboardApiController@removeEvent");
  Route::post("/events/edit/removeimage","Admin\DashboardApiController@editEventRemoveImage");
  Route::post("/message/delete","Admin\DashboardApiController@deleteMessage");
  Route::post("/department/overview","Admin\DashboardApiController@departmentOverview");
  Route::post("/department/da/add","Admin\DashboardApiController@addDepartmentalAchievement");
  Route::post("/department/da/remove","Admin\DashboardApiController@removeDepartmentalAchievement");
  Route::post("/department/sa/add","Admin\DashboardApiController@addStudentAchievement");
  Route::post("/department/sa/remove","Admin\DashboardApiController@removeStudentAchievement");


  Route::get('/update','Admin\UpdateController@update')->name("admin_update");
  Route::post("/settings/main","Admin\UpdateController@settings");
});
