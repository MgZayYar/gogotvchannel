<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>
<head>
<title>GoGo TV Channel</title>
<link rel="icon" href="frontend/images/gogo.jpg" type="image/gif" sizes="16x16">
<link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				
		
		},
		
		hoverEffect: function () {
		
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
				}		
			);				
		
		}

	};
	
	// Run the show!
	filterList.init();
	
	
});	
</script>
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="{{url('')}}"><img src="{{asset('logo/gogo.jpg')}}" width="170" height="70" alt=""></a>
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
	<!-- movies Page Starts here -->
<div class="games">
	<div class="container">
		@php $i=1; @endphp
		@foreach($moviedetail as $row)
		@php 
			$id=$row->id;
			$title=$row->title;
			$length = $row->length;
			$language = $row->language;
			$release_date = $row->release_date;
			$release_country = $row->release_country;
			$year = $row->year;
			$description = $row->description;
			$link1 = $row->link1;
			$link2 = $row->link2;
			$link3 = $row->link3;
			$photos = json_decode($row->photo);
			$photo = $photos[0];
		@endphp 
		<div class="blog-content">
			<h3 class="page-header">{{$title}}</h3>
			<div class="about-top">
				<img src="{{asset($photo)}}" width="250" height="300" alt="">
				<div class="about-details">
					<h4>Release Year : <span>{{$year}}</span></h4>
					<h4>RELEASE COUNTRY : {{$release_country}}</h4>
					<h4>LANGUAGE : {{$language}}</h4>
					<h4>TIME : {{$length}} <span style="font-size: 11px">minutes</span></h4>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<h3 class="page-header">Description</h3>
			<p>{!! $row->description !!}</p>
			<h3 class="page-header">Download Link</h3>
			<a href="{{$link1}}" style="background-color: blue;">-->>Link 1<<--</a><br>
			<a href="{{$link2}}" style="background-color: blue;">-->>Link 2<<--</a><br>
			<a href="{{$link3}}" style="background-color: blue;">-->>Link 3<<--</a><br>

		</div>
		@endforeach
		<div class="blog-sidebar">
			<h3 class="page-header">Ads</h3>
			<div class="fetures">
				<img src="{{asset('frontend/images/fet.jpg')}}" alt="">
				<div class="caption">
					<a href="#">Play Now</a>
				</div>
			</div>
			<div class="fetures">
				<img src="{{asset('frontend/images/fet2.jpg')}}" alt="">
				<div class="caption">
					<a href="#">Play Now</a>
				</div>
			</div>
			<div class="fetures">
				<img src="{{asset('frontend/images/fet.jpg')}}" alt="">
				<div class="caption">
					<a href="#">Play Now</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- What New Part Endss Here -->
<!-- Footer Starts Here -->
<div class="footer">
	<div class="container">
		<ul class="social">
			<li><i class="fa"></i></li>
			<li><i class="fb"></i></li>
			<li><i class="fc"></i></li>
		</ul>
		<p>&copy;All Rights Reserved. Design by <a target="blank" href="https://www.zayyarmaung.me">Mg Zay</a></p>
	</div>
	
</div>
<!-- Footer Ends Here -->