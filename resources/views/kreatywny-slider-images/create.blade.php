@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Slider-Image Form</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="{{ route('kreatywny-slider-images.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    {{-- Row-1 Images --}}
                                    <label class="control-label">Row-1 Images</label>
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-1</label>
                                        <input type="url" id="row_1_image_url_1" name="row_1_image_url_1" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-2</label>
                                        <input type="url" id="row_1_image_url_2" name="row_1_image_url_2" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-3</label>
                                        <input type="url" id="row_1_image_url_3" name="row_1_image_url_3" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-4</label>
                                        <input type="url" id="row_1_image_url_4" name="row_1_image_url_4" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-5</label>
                                        <input type="url" id="row_1_image_url_5" name="row_1_image_url_5" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-6</label>
                                        <input type="url" id="row_1_image_url_6" name="row_1_image_url_6" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_6')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-7</label>
                                        <input type="url" id="row_1_image_url_7" name="row_1_image_url_7" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_7')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-8</label>
                                        <input type="url" id="row_1_image_url_8" name="row_1_image_url_8" required class="form-control" value="{{  $details->where('type', 'row_1_image_url_8')->first()->message ?? '' }}">
                                    </div>
                                </div>
                                {{-- Row-2 Images --}}
                                <label class="control-label">Row-2 Images</label>
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-1</label>
                                        <input type="url" id="row_2_image_url_1" name="row_2_image_url_1" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-2</label>
                                        <input type="url" id="row_2_image_url_2" name="row_2_image_url_2" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-3</label>
                                        <input type="url" id="row_2_image_url_3" name="row_2_image_url_3" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-4</label>
                                        <input type="url" id="row_2_image_url_4" name="row_2_image_url_4" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-5</label>
                                        <input type="url" id="row_2_image_url_5" name="row_2_image_url_5" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-6</label>
                                        <input type="url" id="row_2_image_url_6" name="row_2_image_url_6" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_6')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-7</label>
                                        <input type="url" id="row_2_image_url_7" name="row_2_image_url_7" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_7')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-8</label>
                                        <input type="url" id="row_2_image_url_8" name="row_2_image_url_8" required class="form-control" value="{{  $details->where('type', 'row_2_image_url_8')->first()->message ?? '' }}">
                                    </div>
                                </div>
                                {{-- Row-3 Images --}}
                                <label class="control-label">Row-3 Images</label>
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-1</label>
                                        <input type="url" id="row_3_image_url_1" name="row_3_image_url_1" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-2</label>
                                        <input type="url" id="row_3_image_url_2" name="row_3_image_url_2" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-3</label>
                                        <input type="url" id="row_3_image_url_3" name="row_3_image_url_3" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-4</label>
                                        <input type="url" id="row_3_image_url_4" name="row_3_image_url_4" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-5</label>
                                        <input type="url" id="row_3_image_url_5" name="row_3_image_url_5" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-6</label>
                                        <input type="url" id="row_3_image_url_6" name="row_3_image_url_6" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_6')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-7</label>
                                        <input type="url" id="row_3_image_url_7" name="row_3_image_url_7" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_7')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-8</label>
                                        <input type="url" id="row_3_image_url_8" name="row_3_image_url_8" required class="form-control" value="{{  $details->where('type', 'row_3_image_url_8')->first()->message ?? '' }}">
                                    </div>
                                </div>
                                {{-- Row-4 Images --}}
                                <label class="control-label">Row-4 Images</label>
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-1</label>
                                        <input type="url" id="row_4_image_url_1" name="row_4_image_url_1" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-2</label>
                                        <input type="url" id="row_4_image_url_2" name="row_4_image_url_2" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-3</label>
                                        <input type="url" id="row_4_image_url_3" name="row_4_image_url_3" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-4</label>
                                        <input type="url" id="row_4_image_url_4" name="row_4_image_url_4" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-5</label>
                                        <input type="url" id="row_4_image_url_5" name="row_4_image_url_5" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-6</label>
                                        <input type="url" id="row_4_image_url_6" name="row_4_image_url_6" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_6')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-7</label>
                                        <input type="url" id="row_4_image_url_7" name="row_4_image_url_7" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_7')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-8</label>
                                        <input type="url" id="row_4_image_url_8" name="row_4_image_url_8" required class="form-control" value="{{  $details->where('type', 'row_4_image_url_8')->first()->message ?? '' }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        
  <script>
    $(function () {
    bsCustomFileInput.init();
    });
  </script>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>