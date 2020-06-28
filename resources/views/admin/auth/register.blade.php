<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<!--IE Compatibility modes-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--Mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>SPKPESIS</title>

	<meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
	<meta name="author" content="">

	<meta name="msapplication-TileColor" content="#5bc0de" />
	<meta name="msapplication-TileImage" content="{{ asset('public/assets/img/logo1.jpg') }}" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('public/assets/lib/bootstrap/css/bootstrap.css') }}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('public/assets/lib/font-awesome/css/font-awesome.css') }}">

	<!-- Metis core stylesheet -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/main.css') }}">

	<!-- metisMenu stylesheet -->
	<link rel="stylesheet" href="{{ asset('public/assets/lib/metismenu/metisMenu.css') }}">

	<!-- onoffcanvas stylesheet -->
	<link rel="stylesheet" href="{{ asset('public/assets/lib/onoffcanvas/onoffcanvas.css') }}">

	<!-- animate.css stylesheet -->
	<link rel="stylesheet" href="{{ asset('public/assets/lib/animate.css/animate.css') }}">


	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">



	<!-- Scripts -->
	<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

	<!-- Fonts -->
	<!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

	<!-- Styles -->
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

	<div class="form-signin">
		<div class="text-center">
			<img src="{{ asset('public/assets/img/logo1.jpg') }}" alt="Metis Logo">
		</div>
		<hr>
		<div class="tab-content">
			<div id="login" class="tab-pane active">
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<p class="text-muted text-center">
						Admin
					</p>
					<input placeholder = "Nama" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
					 required autocomplete="name" autofocus> @error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<br>
					<input placeholder = "Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
					 required autocomplete="email"> @error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
                   
					@enderror
					<br>
					<input placeholder = "Kata Sandi" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
					 autocomplete="new-password"> @error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<br>
					<input placeholder = "Konfirmasi Kata Sandi" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					<button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
				</form>
			</div>
			<div id="forgot" class="tab-pane">
				<form action="index.html">
					<p class="text-muted text-center">Enter your valid e-mail</p>
					<input type="email" placeholder="mail@domain.com" class="form-control">
					<br>
					<button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
				</form>
			</div>
			<div id="signup" class="tab-pane">
				<form action="index.html">
					<input type="text" placeholder="username" class="form-control top">
					<input type="email" placeholder="mail@domain.com" class="form-control middle">
					<input type="password" placeholder="password" class="form-control middle">
					<input type="password" placeholder="re-password" class="form-control bottom">
					<button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
				</form>
			</div>
		</div>
		<hr>
		<div class="text-center">
			<ul class="list-inline">

				<li>
					@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Lupa Kata Sandi?') }}
					</a>
					@endif
				</li>

			</ul>
		</div>
	</div>


	<!--jQuery -->
	<script src="{{ asset('public/assets/lib/jquery/jquery.js') }}"></script>

	<!--Bootstrap -->
	<script src="{{ asset('public/assets/lib/bootstrap/js/bootstrap.js') }}"></script>


	<script type="text/javascript">
		(function($) {
			$(document).ready(function() {
				$('.list-inline li > a').click(function() {
					var activeForm = $(this).attr('href') + ' > form';
					//console.log(activeForm);
					$(activeForm).addClass('animated fadeIn');
					//set timer to 1 seconds, after that, unload the animate animation
					setTimeout(function() {
						$(activeForm).removeClass('animated fadeIn');
					}, 1000);
				});
			});
		})(jQuery);
	</script>
</body>

</html>
