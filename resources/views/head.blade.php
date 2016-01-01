<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NullPointerEx</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">		
		<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
		<!-- <link href="{{ asset('/css/round-about.css') }}" rel="stylesheet"> -->
		
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <style>
            body{
                background: url('/img/stardust.png');
            }
        </style>
        <title>NullPointerEx</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
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
					<a class="navbar-brand" href="{{ url('/') }}">NullPointerEx</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li><a href="{{ url('/forum')}}">Repository</a></li>
          				<li><a href="/bloghome">Blogs</a></li>
          				<li><a href="about">About</a></li>
					</ul>
                    
                    <!--searchbar-->
                    
                    <form method='get' action='/search' class="navbar-form navbar-right" role="search">

                        <div class="form-group">
                            <input class="form-control" name="search" placeholder="Still Not Working Yet..." type="text">
                        </div>
                        <button type="submit" class="btn btn-default">Go &raquo</button>
                    </form>
                                          
                    <!--end of searchbar-->

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li>
							<a href="{{ url('/auth/login') }}">Sign In</a>
						</li>
						<li>
							<a href="{{ url('/auth/register') }}">Join</a>
						</li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->can_post())
								<li>
									<a href="{{ url('/new-post') }}">Add new post</a>
								</li>
								<li>
									<a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
								</li>
								@endif
								<li>
									<a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
								</li>
								<li>
									<a href="{{ url('/auth/logout') }}">Logout</a>
								</li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>