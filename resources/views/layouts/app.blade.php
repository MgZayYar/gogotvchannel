<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoGo TV Channel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel='stylesheet' type='text/css' />

    @yield('style-content')
</head>
<body>
    <!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="{{url('')}}"><img src="logo/gogo.jpg" width="170" height="70" alt=""></a>
		</div>
		<span class="menu"></span>
		<div class="navigation">
			<ul class="navig cl-effect-3" >
				<li><a href="{{url('')}}">Home</a></li>
				<li><a href="{{url('movie')}}">Movies</a></li>
				<li><a href="">VIP Plan</a></li>
				<li><a href="{{url('contact')}}">Contact</a></li>
			</ul>
			
			<div class="search-bar">
					<input type="text" placeholder="Search" required="" />
					<input type="submit" value="" />
			</div>
			
			<div class="clearfix"></div>
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Header Ends Here -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer Starts Here -->
<div class="footer">
	<div class="container">
		<ul class="social">
			<li><i class="fa"></i></li>
			<li><i class="fb"></i></li>
			<li><i class="fc"></i></li>
		</ul>
		<p>&copy;All Rights Reserved. Design by <a href="https://zayyarmaung.me">Mg Zay</a></p>
	</div>
	
</div>
<!-- Footer Ends Here -->
    @yield('script-content')
</body>
</html>
