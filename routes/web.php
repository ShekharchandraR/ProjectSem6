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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('student.about');
});

Route::get('price', function () {
    return view('student.pricing');
}); 

Route::get('nav', function () {
    return view('nav');
});



Route::get('appoinment', function () {
    return view('appoinment');
});

Route::get('app', function () {
    return view('appoinmentCancel');
});

Route::get('/registerStudent', function () {
    return view('student.register');
});


Route::get('/change', function () {
    return view('student.change');
});

Route::get('/changePassword', function () {
    return view('student.changepassword');
});

Route::get('/forget', function () {
    return view('student.forget');
});


Route::get('/complainS','complainController@loadStudent');


Route::resource('/teacher','TeacherController');


Route::get('ProfileStudent','studentController@ProfileStudent');

Route::post('UpdateStudent','studentController@StudentUpdate');

Route::post('loginss','studentController@logins');

Route::resource('/logins','studentController');

Route::resource('/complain','complainController');

Route::post('forget','studentController@forget');

Route::get('ProfileStudent','studentController@ProfileStudent');





/// Teacher Paths data;;

Route::get('index1', function () {
    return view('teacher.index1');
});

Route::get('appoinment', function () {
    return view('teacher.appoinment');
});

Route::get("/package", function () {
    return view('teacher.package');
});


Route::resource('courses','CourceController');


Route::get('/teacherT', function () {
    return view('/teacher.teacher');
});

Route::get('/subject', function () {
    return view('/teacher.subject');
});

Route::get('/offer', function () {
    return view('/teacher.offer');
});

Route::get('/tuitiontype', function () {
    return view('/teacher.tuitiontype');
});

Route::get('/packagedetails', function () {
    return view('/teacher.packagedetails');
});

Route::get('/complain','complainController@loadTeacher');


Route::get('/aboutt', function () {
    return view('/teacher.about');
});

Route::get('/loginT', function () {
    return view('/teacher.logine');
});

Route::get('/registerT', function () {
    return view('/teacher.register');
});

Route::post('loginTe','studentController@loginTe');

Route::post('registerTe','studentController@registerTe');

Route::get('ProfileTeacher','studentController@ProfileTeacher');