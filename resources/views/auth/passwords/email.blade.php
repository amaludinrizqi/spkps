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
	<meta name="msapplication-TileImage" content="{{ asset('public/assets/img/metis-tile.png') }}" />

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
            <form method="POST" action="{{ route('password.email') }}">
					@csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<button type="submit" class="btn btn-primary">
                                    {{ __('kirim link ke email') }}
                                </button>
			
				</form>
			</div>
			
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