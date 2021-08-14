<x-backend>
    @php
        $id = $movie_cast->id;
        $movie_id = $movie_cast->movie_id;
        $actor_id = $movie_cast->actor_id;
        $role = $movie_cast->role;
    @endphp

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Edit Movie Cast </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('movie_cast.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('movie_cast.update',$id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> MovieName </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="movieid">
                                        <option> Choose Movie </option>
                                        @foreach($movies as $movie)
                                            <option value="{{ $movie->id }}" @if($movie_id == $movie->id) {{'selected'}} @endif> {{ $movie->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Actor Name </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="actorid">
                                        <option> Choose Actor </option>
                                        @foreach($actors as $actor)
                                            <option value="{{ $actor->id }}" @if($actor_id == $actor->id) {{'selected'}} @endif> {{ $actor->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-sm-2 col-form-label"> Role </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="role" name="role" value="{{$role}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icofont-save"></i>
                                        Update
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