<x-frontend>
    <!-- Movies Page Starts here -->
<div class="games">
	<div class="container">
		
		<h3 class="page-header">
			List of Movies Here
		</h3>
			<div class="main1">
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
                <div class="view view-first">
                    <img src="{{$photo}}" />
                    <div class="mask">
                        <h2>{{$title}}</h2>
                        <p>{{$year}}</p>
                        <a href="{{url('moviedetail',$id)}}" class="info">Details</a>
                    </div>
                </div>  
            @endforeach      
            </div>
          <div class="clearfix"></div>
          <div class="d-flex justify-content-center">
            {!! $movies->links() !!}
        </div>
	</div>
</div>

<!-- Movies Page Ends here -->
</x-frontend>