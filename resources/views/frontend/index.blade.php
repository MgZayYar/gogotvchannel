<x-frontend>
@section('style-content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"  crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"  crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/media-queries.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/carousel.css')}}">
<style>
</style>
@endsection

<section class="section ">
<div class="top-content">
        	<div class="container-fluid">
        		<div id="carousel-example" class="carousel slide" data-ride="carousel">
        			<div class="carousel-inner row w-100 mx-auto" role="listbox">
            			<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="frontend/assets/img/backgrounds/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/2.jpg" class="img-fluid mx-auto d-block" alt="img2">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="frontend/assets/img/backgrounds/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
						</div>
        			</div>
        			<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
        		</div>
        	</div>
        </div>
</section>
<!-- Games Page Starts here -->
<div class="games">
	<div class="container">
		
		<h3 class="page-header">
			Recently Added
        </h3>
			<div class="main" >
            @php $i=1; @endphp
            @foreach($movies as $row)
            @php 
                $id=$row->id;
                $title=$row->title;
                $length = $row->length;
                $language = $row->language;
                $release_date = $row->release_date;
                $release_country = $row->release_country;
                $year = $row->year;
                $photos = json_decode($row->photo);
                $photo = $photos[0];
            @endphp
                <div class="view view-first ">
                    <img src="{{$photo}}" />
                    <div class="mask">
                        <h2>{{$title}}</h2>
                        <p>{{$year}}</p>
                        <a href="{{url('moviedetail',$id)}}" class="info">Details</a>
                    </div>
                </div>  
            @endforeach  
                <div class="clearfix"></div>
                <div class="d-flex justify-content-center">
                    {!! $movies->links() !!}
                </div>
              </div>
              
          <div class="side-bar">
          	<h4>Genres</h4>
          	<ul class="game-list">
            @php $i=1; @endphp
            @foreach($genres as $row)
            @php 
                $id=$row->id;
                $title=$row->title;
            @endphp
                  <li><a href="">{{$title}}</a></li>
            @endforeach
          		
          	</ul>
          	<h4>Directors</h4>
          	<ul class="game-list">
            @php $i=1; @endphp
            @foreach($directors as $row)
            @php 
                $id=$row->id;
                $name=$row->name;
            @endphp
                  <li><a href="">{{$name}}</a></li>
            @endforeach
          	</ul>
          </div>
          <div class="clearfix"></div>
	</div>
</div>

<!-- Games Page Ends here -->
@section('script-content')
<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{asset('frontend/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
@endsection
</x-frontend>