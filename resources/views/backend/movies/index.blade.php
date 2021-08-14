<x-backend>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Movies </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="{{route('movies.create')}}" class="btn btn-outline-primary">
                <i class="icofont-plus icofont-1x"></i>
            </a>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                @if(session('successMsg')!=NULL)

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{session('successMsg')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Title</th>
                                  <th>Photo</th>
                                  <!-- <th>Year</th> -->
                                  <th>Length</th>
                                  <th>Language</th>
                                  <th>ReleaseDate</th>
                                  <th>ReleaseCountry</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @php $i=1; @endphp
                            @foreach($movies as $row)
                            @php 
                                $id=$row->id;
                                $title=$row->title;
                                $length = $row->length;
                                $language = $row->language;
                                $release_date = $row->release_date;
                                $release_country = $row->release_country;
                               
                                $photos = json_decode($row->photo);
                                $photo = $photos[0];
                            @endphp
                            <tr>
                                <td> {{$i++}}. </td>
                                <td>{{$title}}</td>
                                <td> 
                                    <div class="d-flex no-block align-center">
                                        <div class="mr-3">
                                            <img src="{{ asset($photo) }}"
                                                alt="user" class="rounded-circle" width="50"
                                                height="45" />
                                        </div>
                                        
                                    </div>
                                </td>
                                
                                <td>{{$length}}</td>
                                <td>{{$language}}</td>
                                <td>{{$release_date}}</td>
                                <td>{{$release_country}}</td>                                
                                <td>
                                    <a href="{{route('movies.show', $id)}}" class="btn btn-info">
                                        <i class="icofont-info icofont-1x"></i>
                                    </a>
                                    <a href="{{route('movies.edit',$id)}}" class="btn btn-warning">
                                        <i class="icofont-ui-settings icofont-1x"></i>
                                    </a>
                                    <form action="{{route('movies.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">
                                            <i class="icofont-close icofont-1x"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</x-backend>
