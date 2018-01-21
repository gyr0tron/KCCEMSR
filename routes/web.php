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
  Route::get('/about','AboutController@getAbout')->name('about');
  Route::get('/about/committees','AboutController@getCommittees')->name('committees');
  Route::get('/about/committee/{url}','AboutController@getCommitteeDetails')->name('committee-details');
  Route::get('/infrastructures','AboutController@getInfrastructures')->name('infrastructures');

  Route::get('/departments','DepartmentController@getList')->name('department-list');
  Route::get('/department/{name}','DepartmentController@get')->name('department');


  Route::get('/academics/curriculum-plan','AcademicsController@getCurriculumplan')->name('curriculum-plan');
  Route::get('/academics/staff-notices','AcademicsController@getStaffNotices')->name('staff-notices');
  Route::get('/academics/staff-notices/{id}','AcademicsController@getStaffNoticebyId')->name('staff-notices-id');
  Route::get('/academics/exam/{action}','AcademicsController@getExam')->name('exam');
  Route::get('/academics/exam/{action}/{id}','AcademicsController@getExamByID')->name('exam-id');
  Route::get('/academics/publications','AcademicsController@getPublications')->name('publications');

  Route::get('/admissions/{action}','AdmissionsController@get')->name('admissions');
  Route::get('/statutory-affiliations/{action}','AdmissionsController@get')->name('mandatory-disclosure');

  Route::get('/staff/profile/{id}','DepartmentController@getProfile')->name('staff-profile');
  Route::get('/event/{url}','DepartmentController@getEvent')->name('event');
  Route::get('/achievement/{id}','DepartmentController@getAchievement')->name('achievement');

  Route::get('/life-at-kc/staff','DepartmentController@getLifeStaff')->name('life-staff');
  Route::get('/life-at-kc/student','DepartmentController@getLifeStudent')->name('life-student');
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
  Route::get('/department/{url}/{action}/edit/{id}','Admin\DashboardController@department_edit')->name("admin_department_edit");
  Route::get('/announcements','Admin\DashboardController@announcements')->name("admin_announcements");
  Route::get('/academics/{action}','Admin\DashboardController@academics')->name("admin_academics");


  Route::get('/committees','Admin\DashboardController@committees')->name("admin_committees");
  Route::get('/committees/edit/{id}','Admin\DashboardController@editCommittee')->name("admin_committees_edit");

  Route::get('/testimonials','Admin\DashboardController@testimonials')->name("admin_testimonials");
  Route::get('/infrastructures','Admin\DashboardController@infrastructures')->name("admin_infrastructure");

  Route::get('/admissions/{action}','Admin\DashboardController@admissions')->name("admin_admissions");

  Route::get('/library/{action}','Admin\DashboardController@library')->name("admin_library");

  Route::get('/update','Admin\UpdateController@update')->name("admin_update");
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

  Route::post("/contact/edit","Admin\DashboardApiController@editContactDetails");
  Route::post("/message/delete","Admin\DashboardApiController@deleteMessage");

  Route::post("/department/overview","Admin\DashboardApiController@departmentOverview");
  Route::post("/department/da/add","Admin\DashboardApiController@addDepartmentalAchievement");
  Route::post("/department/da/edit","Admin\DashboardApiController@editDepartmentalAchievement");
  Route::post("/department/da/remove","Admin\DashboardApiController@removeDepartmentalAchievement");
  Route::post("/department/sa/add","Admin\DashboardApiController@addStudentAchievement");
  Route::post("/department/sa/edit","Admin\DashboardApiController@editStudentAchievement");
  Route::post("/department/sa/remove","Admin\DashboardApiController@removeStudentAchievement");
  Route::post("/department/staff/add","Admin\DashboardApiController@addStaff");
  Route::post("/department/staff/edit","Admin\DashboardApiController@editStaff");
  Route::post("/department/staff/remove","Admin\DashboardApiController@removeStaff");
  Route::post("/department/topper/add","Admin\DashboardApiController@addAcademicTopper");
  Route::post("/department/topper/remove","Admin\DashboardApiController@removeAcademicTopper");


  Route::post("/department/announcement/add","Admin\DashboardApiController@addAnnouncement");
  Route::post("/department/announcement/remove","Admin\DashboardApiController@removeAnnouncement");


  Route::post("/academics/curriculum-plan","Admin\DashboardApiController@updateCurriculum");
  Route::post("/academics/staff-notices/add","Admin\DashboardApiController@addStaffnotices");
  Route::post("/academics/exam/{action}/add","Admin\DashboardApiController@addExamResults");
  Route::post("/academics/publication/add","Admin\DashboardApiController@addPublication");
  Route::post("/academics/publication/remove","Admin\DashboardApiController@removePublication");

  Route::post("/admission/{action}","Admin\DashboardApiController@updateAdmission");

  Route::post("/library/{action}/add","Admin\DashboardApiController@addLibrary");
  Route::post("/library/{action}/remove","Admin\DashboardApiController@removeLibrary");

  Route::post("/testimonial/add","Admin\DashboardApiController@addTestimonial");
  Route::post("/testimonial/remove","Admin\DashboardApiController@removeTestimonial");
  Route::post("/infrastructure/add","Admin\DashboardApiController@addInfrastructure");
  Route::post("/infrastructure/remove","Admin\DashboardApiController@removeInfrastructure");

  Route::post("/committee/add","Admin\DashboardApiController@addCommittee");
  Route::post("/committee/edit","Admin\DashboardApiController@editCommittee");
  Route::post("/committee/remove","Admin\DashboardApiController@removeCommittee");

  Route::post("/settings/main","Admin\UpdateController@settings");
});

Route::prefix('/test')->group(function() {
  Route::get('/generate-url', function() {
    foreach (App\Event::all() as $event) {
      $event->generateUrl();
      $event->save();
    }
  });
});
