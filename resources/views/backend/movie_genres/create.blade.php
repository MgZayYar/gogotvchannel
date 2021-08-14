<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New MovieGenre </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('movie_genres.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('movie_genres.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> MovieName </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="movieid">
                                        <option> Choose Movie </option>
                                        @foreach($movies as $movie)
                                            <option value="{{ $movie->id }}"> {{ $movie->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> GenreName </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="genreid">
                                        <option> Choose Genre </option>
                                        @foreach($genres as $genre)
                                            <option value="{{ $genre->id }}"> {{ $genre->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icofont-save"></i>
                                        Save
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-backend>