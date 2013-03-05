<?= Form::open('login', 'POST') ?>

	<?= Form::label('email', 'Email Address') ?>
	<?= Form::input('email', Input::old('email')) ?>

	<?= Form::label('password', 'Password') ?>
	<?= Form::password('email') ?>

	<?= Form::submit('Login') ?>

	<!--not sure what the csrf token call is, laravel 4 isn't fully documented -->

<?= Form::close() ?>