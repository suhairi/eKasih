<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
	<title>MBAS : PPKB</title>

	<link rel="shortcut icon" href="{{{ asset('images/favicon__.png') }}}">
=======
	<title>Laravel</title>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
<<<<<<< HEAD
	<link href="{{ asset('/css/google.roboto.css') }}" rel="stylesheet">
=======
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<<<<<<< HEAD
		<script src="{{ asset('js/html5shiv.js') }}"></script>
  		<script src="{{ asset('js/respond.min.js') }}"></script>
=======
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<<<<<<< HEAD
				<a class="navbar-brand" href="#">eKasih</a>
=======
				<a class="navbar-brand" href="#">Laravel</a>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
<<<<<<< HEAD
						{{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
						{{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
					@else


                        @if(Auth::user()->hasRole('root'))
                            <ul class="nav navbar-nav">
                                <li><a href="#">Root Menu 1</a></li>
                                <li><a href="#">Root Menu 2</a></li>
                                <li><a href="#">Root Menu 3</a></li>
                                <li><a href="#">Root Menu 4</a></li>
                            </ul>
                        @endif

                        @if(Auth::user()->hasRole('administrator'))
                            <ul class="nav navbar-nav">
                                <li><a href="/cmanager/create-user">Create User</a></li>
                                <li><a href="#">Admin Menu 2</a></li>
                                <li><a href="#">Admin Menu 3</a></li>
                                <li><a href="#">Admin Menu 4</a></li>
                            </ul>
                        @endif

                        @if(Auth::user()->hasRole('manager'))
                            <ul class="nav navbar-nav">
                                <li><a href="#">Manager Menu 1</a></li>
                                <li><a href="#">Manager Menu 2</a></li>
                                <li><a href="#">Manager Menu 3</a></li>
                                <li><a href="#">Manager Menu 4</a></li>
                            </ul>
                        @endif

                        @if(Auth::user()->hasRole('company manager'))
                            <ul class="nav navbar-nav">
                                <li><a href="/cmanager/user/create">Create User</a></li>
                                <li><a href="#">CManager Menu 2</a></li>
                                <li><a href="#">CManager Menu 3</a></li>
                                <li><a href="#">CManager Menu 4</a></li>
                            </ul>
                        @endif

                         @if(Auth::user()->hasRole('user'))
                            <ul class="nav navbar-nav">
                                <li><a href="#">User Menu 1</a></li>
                                <li><a href="#">User Menu 2</a></li>
                                <li><a href="#">User Menu 3</a></li>
                                <li><a href="#">User Menu 4</a></li>
                            </ul>
                        @endif

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/dashboard/changePassword') }}">Change Password</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </li>
=======
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
<<<<<<< HEAD
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
=======
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
</body>
</html>
