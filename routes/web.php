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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
     return view('user.index');
});

Route::get('/user/about', function () {
    return view('user.about');
});

Route::get('/user/service', function () {
    return view('user.service');
});

Route::get('/myfile', function () {
    return view('myfile');
});


Route::get('/user/pricing', function () {
    return view('user.pricing');
});

Route::get('/user/blog', function () {
    return view('user.blog');
});

Route::get('/user/blog-details', function () {
    return view('user.blog-details');
});

Route::get('/user/contact', function () {
    return view('user.contact');
});
Route::get('/user/login', function () {
    return view('auth.login');
});

Route::get('/sendemail','sendEmailController@index');
Route::post('/sendemail/send','sendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('crud','Crudcotroller');