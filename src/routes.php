<?php

Route::get('login', function() {
	return 'login';
});

Route::post('login', function() {
	//@todo try to login the user

	return Redirect::to('home');
});

Route::get('logout', function() {

	//@todo log the user out

	return Redirect::to('login');
});

Route::get('register', function() {
	return 'register';
});

Route::get('forgot', function() {
	return 'forgot';
});

Route::post('forgot', function() {

	//@todo try to resend the user info

	return Redirect::to('login');
});