<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New Actor </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('actors.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('actors.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
							<div class="form-group row">
								<div class="col-lg-2">
									<label for="FormControlFile">Gender</label>
								</div>
								<div class="col-lg-10">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
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