<x-backend>
    @php
        $id = $movies->id;
        $title = $movies->title;
        $oldphoto = $movies->photo;
        $length = $movies->length;
        $year = $movies->year;
        $language = $movies->language;
        $description = $movies->description;
        $release_date = $movies->release_date;
        $release_country = $movies->release_country;
        $link1 = $movies->link1;
        $link2 = $movies->link2;
        $link3 = $movies->link3;


    @endphp

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Movie Details </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('movies.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <input type="hidden" name="oldphoto" value="{{$movies->photo}}">
                        
                        <div class="form-group row">
                            <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                            <div class="col-sm-10">
                                <div class="input-images"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label"> Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-2 col-form-label"> Year </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="year" name="year" value="{{ $year }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="length" class="col-sm-2 col-form-label"> Length </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="length" name="length" value="{{ $length }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="language" class="col-sm-2 col-form-label"> Language </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="language" name="language" value="{{ $language }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="release_date" class="col-sm-2 col-form-label"> ReleaseDate </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="release_date" name="release_date" value="{{ $release_date }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="release_country" class="col-sm-2 col-form-label"> ReleaseCountry </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="release_country" name="release_country" value="{{ $release_country }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="i_description" class="col-sm-2 col-form-label"> Description </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="i_description" name="description"> {{ $description }} 
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link1" class="col-sm-2 col-form-label"> link 1 </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="link1" name="link1">{{$link1}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link1" class="col-sm-2 col-form-label"> link 2 </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="link2" name="link2">{{$link2}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link1" class="col-sm-2 col-form-label"> link 3 </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="link3" name="link3">{{$link3}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <a href="{{route('movies.edit',$id)}}" class="btn btn-warning">
                                    <i class="icofont-ui-settings icofont-1x">Go To Edit</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@section('script_content')

    <script type="text/javascript">
        $(document).ready(function() {

            var images = JSON.parse('{!! $movies->photo !!}');
            var public_path = "{{asset('/')}}";

            console.log(images);
            var imgpre_arr=[];


            for (i = 0; i < images.length; i++) 
            {
                var imgpre_obj={};

                imgpre_obj.id = i;
                imgpre_obj.src = public_path+images[i];

                imgpre_arr.push(imgpre_obj);

            }


            $('.input-images').imageUploader({
               preloaded: imgpre_arr,
               preloadedInputName: 'oldPhoto',
            });

        });
    </script>
@endsection

</x-backend>