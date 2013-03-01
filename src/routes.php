<?php

/*
 *	Show the login form for the visitor.
 *
 *	@return \Redirect
 */
Route::get('login', ['as' => 'login', function() {
	return View::make('monster::login.index');
}]);

/*
 *	Attempt to login the user.
 *
 *	@return \Redirect
 */
Route::post('login', function() {
	//@todo try to login the user

	return Redirect::to('home');
});

/*
 *	Attempt to logout the user.
 *
 *	@return \Redirect
 */
Route::get('logout', ['as' => 'logout', function() {
	return Redirect::to('login');
}]);

/*
 *	Show the user the register form.
 *
 *	@return \Redirect
 */
Route::get('register', ['as' => 'register', function() {
	return 'register';
}]);

/*
 *	Give the user a form to let them retrieve info.
 *
 *	@return \Redirect
 */
Route::get('login@forgot', ['as' => 'forgot', function() {
	return 'forgot';
}]);

/*
 *	Reset and send the user's password.
 *
 *	@return \Redirect
 */
Route::post('login@forgot', function() {
	return Redirect::to('login');
});

/*
 *	Show the user a form to reset their password
 *
 *	@return \Redirect
 */
Route::get('login@reset', ['as' => 'reset', function() {
	return 'reset password';
}]);

/*
 *	Try to reset the user's password.
 *
 *	@return \Redirect
 */
Route::post('login@reset', function() {
	return Redirect::to('profile.password');
});