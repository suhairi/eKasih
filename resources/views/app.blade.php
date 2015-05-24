<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href="{{ asset('/css/google.roboto.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="{{ asset('js/html5shiv.js') }}"></script>
  		<script src="{{ asset('js/respond.min.js') }}"></script>
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
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else


                        {{--@if(Auth::user()->hasRole('root'))--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--<li><a href="#">Root Menu 1</a></li>--}}
                                {{--<li><a href="#">Root Menu 2</a></li>--}}
                                {{--<li><a href="#">Root Menu 3</a></li>--}}
                                {{--<li><a href="#">Root Menu 4</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                        {{--@if(Auth::user()->hasRole('administrator'))--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--<li><a href="#">Admin Menu 1</a></li>--}}
                                {{--<li><a href="#">Admin Menu 2</a></li>--}}
                                {{--<li><a href="#">Admin Menu 3</a></li>--}}
                                {{--<li><a href="#">Admin Menu 4</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}


                        {{--@if(Auth::user()->hasRole('manager'))--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--<li><a href="#">Manager Menu 1</a></li>--}}
                                {{--<li><a href="#">Manager Menu 2</a></li>--}}
                                {{--<li><a href="#">Manager Menu 3</a></li>--}}
                                {{--<li><a href="#">Manager Menu 4</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                        {{--@if(Auth::user()->hasRole('company manager'))--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--<li><a href="#">CManager Menu 1</a></li>--}}
                                {{--<li><a href="#">CManager Menu 2</a></li>--}}
                                {{--<li><a href="#">CManager Menu 3</a></li>--}}
                                {{--<li><a href="#">CManager Menu 4</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                         {{--@if(Auth::user()->hasRole('user'))--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--<li><a href="#">User Menu 1</a></li>--}}
                                {{--<li><a href="#">User Menu 2</a></li>--}}
                                {{--<li><a href="#">User Menu 3</a></li>--}}
                                {{--<li><a href="#">User Menu 4</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Log Keluar</a></li>
                            </ul>
                        </li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
