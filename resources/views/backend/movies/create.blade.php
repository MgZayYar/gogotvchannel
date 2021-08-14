<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New Movie </h1>
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
                        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label"> Title </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                <div class="col-sm-10">
                                    <div class="input-images"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label"> Year </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="year" name="year">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="length" class="col-sm-2 col-form-label"> Length </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="length" name="length">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="language" class="col-sm-2 col-form-label"> Language </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="language" name="language">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="release_date" class="col-sm-2 col-form-label"> ReleaseDate </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="release_date" name="release_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="release_country" class="col-sm-2 col-form-label"> ReleaseCountry </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="release_country" name="release_country">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="i_description" class="col-sm-2 col-form-label"> Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="i_description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="downlink" class="col-sm-2 col-form-label"> Link 1</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="link1" name="link1"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="downlink" class="col-sm-2 col-form-label"> Link 2</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="link2" name="link2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="downlink" class="col-sm-2 col-form-label"> Link 3</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="link3" name="link3"></textarea>
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

@section('script_content')

    <script type="text/javascript">
        $(document).ready(function() {

            $('#i_description').summernote();


            $('.input-images').imageUploader();

        });
    </script>
@endsection

</x-backend>