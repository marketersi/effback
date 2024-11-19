@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Anatomy Guide Edit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Business Name Creation / Anatomy Guide / Edit</li>
                            </ol>
                        </div>
                    </div>
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
                          @if ($message = Session::get('success'))
                            <div id="success-message" class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @if ($error = Session::get('error'))
                            <div class="alert alert-danger " id="errorMessage">
                                <p>{{ $error }}</p>
                            </div>
                            @endif

                            <script>
                                setTimeout(function() {
                                    $('#success-message').fadeOut('slow');
                                }, 4000);
                            </script>

                            <script>
                                setTimeout(function() {
                                    $('#errorMessage').fadeOut('slow');
                                }, 4000);
                            </script>
                            @endif
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Anatomy Guide</h3>
                                </div>

                                <form action="{{route('businessNameCreation.anatomyGuideUpdate')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$anatomy_Details->id}}">
                                    <div class="card-body">
                                        <div class="row">

                                          <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph1">Paragraph 1</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="paragraph1" id="paragraph1" placeholder="Enter paragraph text">{{$anatomy_Details->paragraph1}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph2">Paragraph 2</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="paragraph2" id="paragraph2" placeholder="Enter paragraph text">{{$anatomy_Details->paragraph2}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph3">Paragraph 3</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="paragraph3" id="paragraph3" placeholder="Enter paragraph text">{{$anatomy_Details->paragraph3}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph4">Paragraph 4</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="paragraph4" id="paragraph4" placeholder="Enter paragraph text">{{$anatomy_Details->paragraph4}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="percentage_image_url">% Image URL</label>
                                                    <input type="text" class="form-control" name="percentage_image_url" id="percentage_image_url" value='{{ $anatomy_Details->percentage_image_url }}' placeholder="Enter image url">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="banner_url">Banner URL</label>
                                                    <input type="text" class="form-control" name="banner_url" id="banner_url" value='{{ $anatomy_Details->banner_url }}' placeholder="Enter image url">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="brand_url">Brand URL</label>
                                                    <input type="text" class="form-control" name="brand_url" id="brand_url" value='{{ $anatomy_Details->brand_url }}' placeholder="Enter image url">
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