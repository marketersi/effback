@include("auth.layouts.app")

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
                                    <h3 class="card-title">Update Price Cards</h3>
                                </div>

                                <form action="{{route('price-card.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="update_id" @if(isset($priceCard)) value="{{$priceCard->id}}" @endif>

                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" @if(isset($priceCard)) value='{{ $priceCard->title }}' @endif placeholder="Enter Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Subtitle-1</label>
                                                    <input type="text" class="form-control" name="subtitle_1" id="subtitle_1" @if(isset($priceCard)) value='{{ $priceCard->subtitle_1 }}' @endif placeholder="Enter Subtitle-1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description-1</label>
                                                    <input type="text" class="form-control" name="description_1" id="description_1" @if(isset($priceCard)) value='{{ $priceCard->description_1 }}' @endif placeholder="Enter Description-1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Subtitle-2</label>
                                                    <input type="text" class="form-control" name="subtitle_2" id="subtitle_2" @if(isset($priceCard)) value='{{ $priceCard->subtitle_2 }}' @endif placeholder="Enter Subtitle-2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description-2</label>
                                                    <input type="text" class="form-control" name="description_2" id="description_2" @if(isset($priceCard)) value='{{ $priceCard->description_2 }}' @endif placeholder="Enter Description-2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bottom Text</label>
                                                    <input type="text" class="form-control" name="bottom_text" id="bottom_text" @if(isset($priceCard)) value='{{ $priceCard->bottom_text }}' @endif placeholder="Enter Bottom Text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Button_text</label>
                                                    <input type="text" class="form-control" name="button_text" id="button_text" @if(isset($priceCard)) value='{{ $priceCard->button_text }}' @endif placeholder="Enter Button_text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Background Text</label>
                                                    <input type="text" class="form-control" name="background_text" id="background_text" @if(isset($priceCard)) value='{{ $priceCard->background_text }}' @endif placeholder="Enter Background Text">
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