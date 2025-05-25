<?php

use App\Http\Controllers\CourseController;
use App\Http\Requests\CoursreRequest;
use App\Model\Contact;
use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/passwordReset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/passwordReset/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/passwordReset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/passwordReset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes(['reset' => false]);
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');
        Route::get('/KianCourse:{id}', 'AnycourseController@index')->name('mycourse');
        Route::get('/instructore{id}', 'AnycourseController@profile')->name('incourse');
        Route::get('/courses', 'AnycourseController@indexall')->name('courses');
        Route::get('/event', 'Events_welcomeController@index')->name('event');
        Route::get('/contactUs', 'ContactController@index')->name('contactUs');
        Route::get('/About', 'AboutController@index')->name('About');



        Route::group(['middleware' => 'auth'], function () {
            Route::get('/course', function () {
                $courses = course::all(['name']);
                return response()->json($courses);
            });


            Route::get('/results', function (Illuminate\Http\Request $request) {
                $query = $request->input('query');
                $courses = course::where('name', 'like', "%{$query}%")->get();
                $instructor = instructor::all();
                return view('results', compact('courses', 'instructor', 'query'));
            });


            Route::post('/bookingstore', 'BookingController@store')->name('bookingstore');
            Route::post('/addopinion', 'AboutController@addopinion')->name('addopinion');
            Route::post('/contact/save', 'ContactController@save')->name('contact.save');
            //--------------------navbar--------------------------
        });

        Route::group(['middleware' => 'CheckAdmin'], function () {
            // -------------------Course opretion----------------------
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/booking', 'BookingController@index')->name('booking');
            Route::get('/showbooking{id}', 'BookingController@show')->name('showbooking');
            Route::get('/looking{id}', 'BookingController@looking')->name('looking');
            Route::get('/deletbook{id}', 'BookingController@delet')->name('deletbook');

            Route::get('/opinionDashbourd', 'OpinionController@opinionDashbourd')->name('opinionDashbourd');
            Route::post('/addopiniondash', 'OpinionController@addopiniondash')->name('addopiniondash');


            // --------create operation----
            Route::get('/createCourse', 'CourseController@create')->name('createCourse');
            Route::post('storeCourse', [CourseController::class, 'store'])->name('storeCourse');

            // --------show operation----
            Route::post('/showCourse', 'CourseController@show')->name('showCourse');

            // --------edit operation----
            Route::get('/edit{id}', 'CourseController@edit')->name('edit');
            Route::post('/save', 'CourseController@save')->name('save');


            // --------delete operation----
            Route::post('/delet', 'CourseController@delet')->name('delet');
            //  -------------------Course opretion----------------------

            Route::get('/table', 'TableControl@index')->name('table');
            Route::get('/user', 'TableControl@indexuser')->name('user');
            Route::get('/contact', 'TableControl@indexcontact')->name('contact');
            Route::get('/deleteopinion{id}', 'OpinionController@deleteopinion')->name('deleteopinion');



            //  -------------------instructore opretion----------------------
            // --------create operation----
            Route::get('/createInstructor', 'InstructorController@create')->name('createInstructor');
            Route::post('/storeInstuctore', 'InstructorController@store')->name('storeInstuctore');
            // --------show operation----
            Route::post('/showInstructor', 'InstructorController@show')->name('showInstructor');
            // --------delete operation----
            Route::post('/deletInstructor', 'InstructorController@delet')->name('deletInstructor');
            // --------edit operation----
            Route::get('/update{id}', 'InstructorController@updateIn')->name('update');
            Route::post('/saveInstuctore', 'InstructorController@save')->name('saveInstuctore');
            //  ------------------instructore opretion----------------------

            //  ------------------- Start Events opretion ----------------------
            Route::get('Events/create', "EventsController@create")->name('events.create');
            Route::post('Events/store', "EventsController@store")->name('events.store');
            Route::get('Events/delete/{id}', "EventsController@delete")->name('events.delete');
            Route::get('Events/edit/{id}', "EventsController@edit")->name('events.edit');
            Route::post('Events/save', "EventsController@save")->name('events.save');
            //  ------------------- End Events opretion ----------------------

            //  -------------------Users opretion----------------------
            Route::get('/tablesCreate', "TableController@create")->name('users.create');
            Route::post('/tables/store', "TableController@store")->name('users.store');
            Route::get('/tablesEdit/{id}', "TableController@edit")->name('users.edit');
            Route::post('/tables/savenew', "TableController@save")->name('users.save');
            Route::get('/tables/delete/{id}', "TableController@delete")->name('users.delete');

            //  -------------------Users opretion----------------------


            //  -------------------Contact opretion----------------------
            Route::get('/contact/delete/{id}', 'ContactController@delete')->name('contact.delete');

            //  -------------------Contact opretion----------------------
            Route::get('/deleteopinion{id}', 'OpinionController@deleteopinion')->name('deleteopinion');

            //------------------------- Pages -------------------
            Route::get('/users', function () {
                $instruct = instructor::all();
                $courses = course::all();
                $user = User::all();
                return view('Page.Users', ['hatem' => $user, 'result' => $courses, 'instructores' => $instruct]);
            })->name('user_1');

            Route::get('/instructor', function () {
                $instruct = instructor::all();
                $courses = course::all();
                return view('Page.Instuctore', ['result' => $courses, 'instructores' => $instruct]);
            })->name('instructor');

            Route::get('/ahmed', function () {
                $instruct = instructor::all();
                $courses = course::all();
                $event = Events::all();
                return view('Page.Events', ['event' => $event, 'result' => $courses, 'instructores' => $instruct]);
            })->name('Event_2');

            Route::get('/course', function () {
                $instruct = instructor::all();
                $courses = course::all();
                return view('Page.Course', ['result' => $courses, 'instructores' => $instruct]);
            })->name('Course_2');

            Route::get('/Contact', function () {
                $instruct = instructor::all();
                $courses = course::all();
                $contact = Contact::all();
                return view('Page.Contact', ['ahmed' => $contact, 'result' => $courses, 'instructores' => $instruct]);
            })->name('Contact_2');
            //------------------------- Pages -------------------

        });
    }
);
