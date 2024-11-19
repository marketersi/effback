@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if ($errors->any())
                        <div class="alert alert-danger" id="errorMessage">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <script>
                            setTimeout(function() {
                                $('#errorMessage').fadeOut('slow');
                            }, 8000);
                        </script>
                        @endif

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Hero Section</h3>
                                </div>

                                <form action="{{route('kreatywny-hero-section.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="update_id" @if(isset($herosection_Details)) value="{{$herosection_Details->id}}" @endif>
                                                    <label for="factowtitle">Hero-Section Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" @if(isset($herosection_Details)) value='{{ $herosection_Details->title }}' @endif placeholder="Enter hero-section title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowtitle">Hero-Section Subtitle</label>
                                                    <input type="text" class="form-control" name="subtitle" id="subtitle" @if(isset($herosection_Details)) value='{{ $herosection_Details->subtitle }}' @endif placeholder="Enter hero-section subtitle">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowtitle">Hero-Section Description</label>
                                                    <textarea type="text" cols="5" rows="5" class="form-control" name="description" id="description" placeholder="Enter hero-section Description">@if(isset($herosection_Details))  {{ $herosection_Details->description }} @endif</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowParagraph2">Hero-Section Image-Left 1</label>
                                                    <textarea type="url" cols="5" rows="5" class="form-control" name="image_left1" id="image_left1" placeholder="Enter hero-section subtitle">@if(isset($herosection_Details)){{ $herosection_Details->image_left1 }}@endif</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowParagraph2">Hero-Section Image-Left 2</label>
                                                    <textarea type="url" cols="5" rows="5" class="form-control" name="image_left2" id="image_left2" placeholder="Enter hero-section subtitle">@if(isset($herosection_Details)){{ $herosection_Details->image_left2 }}@endif</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowParagraph3">Hero-Section Image-Right 1</label>
                                                    <textarea type="url" cols="5" rows="5" class="form-control" name="image_right1" id="image_right1" placeholder="Enter hero-section subtitle">@if(isset($herosection_Details)){{ $herosection_Details->image_right1 }}@endif</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowParagraph3">Hero-Section Image-Right 2</label>
                                                    <textarea type="url" cols="5" rows="5" class="form-control" name="image_right2" id="image_right2" placeholder="Enter hero-section subtitle">@if(isset($herosection_Details)){{ $herosection_Details->image_right2 }}@endif</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="factowParagraph3">Hero-Section Background-Video</label>
                                                    <textarea type="url" cols="5" rows="5" class="form-control" name="background_video" id="background_video" placeholder="Enter hero-section subtitle">@if(isset($herosection_Details)){{ $herosection_Details->background_video }}@endif</textarea>
                                                </div>
                                            </div>
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
                    </div>

                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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