<?php

/*
 *	Show the login form for the visitor.
 */
Route::get('login', function() {
	return View::make('monster::login.index');
});

/*
 *	Attempt to login the user.
 */
Route::post('login', function() {
	//@todo try to login the user

	return Redirect::to('home');
});

/*
 *	Attempt to logout the user.
 */
Route::get('logout', function() {
	return Redirect::to('login');
});

/*
 *	Show the user the register form.
 */
Route::get('register', function() {
	return 'register';
});

/*
 *	Give the user a form to let them retrieve info.
 */
Route::get('forgot', function() {
	return 'forgot';
});

/*
 *	Reset and send the user's password.
 */
Route::post('forgot', function() {
	return Redirect::to('login');
});

/*
 *	Show the user a form to reset their password
 */
Route::get('reset', function() {
	return 'reset password';
});

/*
 *	Try to reset the user's password.
 */
Route::post('reset', function() {
	return Redirect::to('profile.password');
});