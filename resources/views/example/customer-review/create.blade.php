@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Customer Review</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Customer Review</li>
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
                                    <h3 class="card-title">Add Customer Review</h3>
                                </div>

                                <form action="{{route('example.reviewStore')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="customer_quote">Customer Quote</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="customer_quote" id="customer_quote" placeholder="Enter customer quote" required> {{  $details->where('type', 'customer_quote')->first()->message ?? '' }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="customer_description">Customer Description</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="customer_description" id="customer_description" placeholder="Enter customer description" required> {{  $details->where('type', 'customer_description')->first()->message ?? '' }} </textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="review_buttonText">Review Button Text</label>
                                                    <input type="text" class="form-control" name="review_buttonText" id="review_buttonText" value="{{  optional($details->where('type', 'review_buttonText')->first())->message ?? '' }}" placeholder="Enter review button text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="customer_image">Customer Image</label>
                                                    <input type="url" class="form-control" name="customer_image" id="customer_image" value="{{  optional($details->where('type', 'customer_image')->first())->message ?? '' }}" placeholder="Enter customer image url" required>
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