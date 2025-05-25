<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------------------- Course Api  route ------------------------------'
Route::get('/AllCourses', 'API\CourseController@index');
Route::post('/StoreCourse', 'API\CourseController@Store');
Route::get('/ShowCourse/id={id}', 'API\CourseController@show');
Route::put('/updateCourse/id={id}', 'API\CourseController@update');
Route::delete('/deleteCourse/id={id}', 'API\CourseController@delete');

//--------------------------- Course Api  route ------------------------------

//--------------------------- Instructor Api  route ------------------------------'
Route::get('/AllInstructors', 'API\InstructorsController@index');
Route::post('/StoreInstructor', 'API\InstructorsController@Store');
Route::get('/ShowInstructor/id={id}', 'API\InstructorsController@show');
Route::put('/updateInstructor/id={id}', 'API\InstructorsController@update');
Route::delete('/deleteInstructor/id={id}', 'API\InstructorsController@delete');
//--------------------------- Instructor Api  route ------------------------------

//--------------------------- Event Api  route ------------------------------'
Route::get('/AllEvents', 'API\EventController@index');
Route::post('/StoreEvent', 'API\EventController@Store');
Route::get('/ShowEvent/id={id}', 'API\EventController@show');
Route::put('/updateEvent/id={id}', 'API\EventController@update');
Route::delete('/deleteEvent/id={id}', 'API\EventController@delete');
//--------------------------- Event Api  route ------------------------------

//--------------------------- Contact Api  route ------------------------------'
Route::get('/AllContacts', 'API\ContactController@index');
Route::post('/StoreContact', 'API\ContactController@Store');
Route::get('/ShowContact/id={id}', 'API\ContactController@show');
Route::put('/updateContact/id={id}', 'API\ContactController@update');
Route::delete('/deleteContact/id={id}', 'API\ContactController@delete');
//--------------------------- Contact Api  route ------------------------------

//--------------------------- User Api  route ------------------------------'
Route::get('/AllUsers', 'API\UsersController@index');
Route::post('/StoreUser', 'API\UsersController@Store');
Route::get('/ShowUser/id={id}', 'API\UsersController@show');
Route::put('/updateUser/id={id}', 'API\UsersController@update');
Route::delete('/deleteUser/id={id}', 'API\UsersController@delete');
//--------------------------- User Api  route ------------------------------

//--------------------------- Booking Api  route ------------------------------'
Route::get('/AllBookings', 'API\BookingController@index');
Route::get('/ShowBooking/id={id}', 'API\BookingController@show');
Route::post('/StoreBooking', 'API\BookingController@booking');
Route::get('/SentBooking/id={id}', 'API\BookingController@sent');
Route::get('/deleteBooking/id={id}', 'API\BookingController@delete');
//--------------------------- Booking Api  route ------------------------------


