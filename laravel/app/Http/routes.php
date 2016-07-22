<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
	return view('front.index');
});

Route::get('/results', function(){
	return view('front.results');
});

Route::get('/details', function(){
	return view('front.details');
});

Route::get('/register_page', function(){
	return view('front.register');
});

Route::get('/profile', function(){
	return view('front.profile');
});

Route::get('/profile/education/create', function(){
	return view('front.edit_profile.create_education');
});

Route::get('/profile/experience/create', function(){
	return view('front.edit_profile.create_experience');
});

Route::get('/profile/subject/create', 'SubjectsController@show');
Route::get('/profile/{id}/create', 'SubjectsController@show');


Route::get('/subject', 'SubjectsController@index');

<<<<<<< HEAD
Route::post('/profile/subject/create', 'SubjectsController@create');
=======
Route::resource('/education', 'EducationsController');
Route::get('/education/{education}/delete', 'EducationsController@destroy');
// Route::get()
<<<<<<< HEAD
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7

Route::get('pro/{id}/edit', 'SubjectsController@edit');

Route::patch('/profile/{data}/update', 'SubjectsController@update');

Route::get('/pro/{id}/delete', 'SubjectsController@delete');


Route::get('/education', function() {
	return view('front.profile.education');
});

Route::get('/experience', function() {
	return view('front.profile.experience');
});

<<<<<<< HEAD
// Route::get('/subject', function() {
// 	return view('front.profile.subject');
// });

=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
Route::get('/tutor/{id}','TutorController@index');
Route::auth();

Route::get('/home', 'HomeController@index');




Route::get('/teacher/{id}', function() {
	return view('front.details');
});
