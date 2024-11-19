@include('auth.layouts.app')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>General Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div>
                    </div> -->
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
                                    <h3 class="card-title">Hero Section Form</h3>
                                </div>

                                <form action="{{ route('opinieHero.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {{--<div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="update_id"
                                                        @if (isset($opinionHero)) value="{{ $opinionHero->id }}" @endif>

                                                    <label for="dropdown_lable">Image-URL</label>
                                                    <input type="url" class="form-control"
                                                        name="image" id="image"
                                                        @if (isset($opinionHero)) value='{{ $opinionHero->image }}' @endif
                                                        placeholder="Enter Image-URL">
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" value="{{  $details->where('type', 'title')->first()->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Image-1</label>
                                                <input type="url" id="image_1" name="image_1" required class="form-control" value="{{  $details->where('type', 'image_1')->first()->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Image-2</label>
                                                <input type="url" id="image_2" name="image_2" required class="form-control" value="{{  $details->where('type', 'image_2')->first()->message ?? '' }}">
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
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
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
