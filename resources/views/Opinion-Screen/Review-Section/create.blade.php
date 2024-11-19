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
                                    <h3 class="card-title">Review Form</h3>
                                </div>

                                <form action="{{ route('opinieReview.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="update_id"
                                                        @if (isset($OpinionReview)) value="{{ $OpinionReview->id }}" @endif>

                                                    <label for="image_url">Client Image</label>
                                                    <input type="url" class="form-control" name="client_image"
                                                        id="client_image"
                                                        @if (isset($OpinionReview)) value='{{ $OpinionReview->client_image }}' @endif
                                                        placeholder="Enter Client Image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="image_url">Client Logo</label>
                                                    <input type="url" class="form-control" name="client_logo"
                                                        id="client_logo"
                                                        @if (isset($OpinionReview)) value='{{ $OpinionReview->client_logo }}' @endif
                                                        placeholder="Enter Client Logo URL">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="rating">Rating</label>
                                                    <input type="text" class="form-control" name="rating_no"
                                                        id="rating_no"
                                                        @if (isset($OpinionReview)) value='{{ $OpinionReview->rating_no }}' @endif
                                                        placeholder="Enter Rating">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="client_name">Client Name</label>
                                                    <input type="text" class="form-control" name="client_name"
                                                        id="client_name"
                                                        @if (isset($OpinionReview)) value='{{ $OpinionReview->client_name }}' @endif
                                                        placeholder="Enter Client Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="client_designation">Client Designation</label>
                                                    <input type="text" class="form-control" name="designation"
                                                        id="designation"
                                                        @if (isset($OpinionReview)) value='{{ $OpinionReview->designation }}' @endif
                                                        placeholder="Enter Client Designation">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Paragraph">Paragraph</label>
                                                    <textarea type="text" class="form-control" name="paragraph"
                                                        id="paragraph"
                                                        placeholder="Enter Paragraph"> @if (isset($OpinionReview)){{ $OpinionReview->paragraph }}@endif</textarea>
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
