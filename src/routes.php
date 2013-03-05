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

	//Get the login form variables
	$email		= Input::get('email', null);
	$password	= Input::get('password', null);

	//Send them back if the email is null
	if($email === null || $email == '') {
		return Redirect::back()
			->with('messages', ['danger' => 'An email is required.']);
	}

	//If the password is blank, send them back
	if($password === null || $password == '') {
		return Redirect::back()
			->with('messages', ['danger' => 'A password is required.']);
	}

	//@TODO check if remember me is check and set if it is

	//validate the email address with native php
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		//encourage them to use a real email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		//send them back to the login form
		return Redirect::back()
			->with('email', $email)
			->with('messages', ['danger' => 'Please provide a valid email address.']);
	}

	//they are logged in, send them "home"
	return Redirect::to(Config::get('monster::general.loggedInEndPoint'));
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
	return Redirect::to(Config::get('monster::general.loggInFormEndPoint'));
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

/*
 *	Handle the callback from the social links.
 *
 *	@return \Redirect
 */
Route::get('social', function() {

	// @todo handle the callback from the social

	return Redirect::to(Config::get('monster::general.loggedInEndPoint'));
});