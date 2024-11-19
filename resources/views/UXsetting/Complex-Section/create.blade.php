@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Complex Section</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Complex Section</li>
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
                                    <h3 class="card-title">Complex Section</h3>
                                </div>

                                <form action="{{route('UXcomplex.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="customer_quote">Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value="{{  optional($details->where('type', 'title')->first())->message ?? '' }}" placeholder="Enter title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph_1">Paragraph-1</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="paragraph_1" id="paragraph_1" placeholder="Enter paragraph" required> {{  $details->where('type', 'paragraph_1')->first()->message ?? '' }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph_2">Paragraph-2</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="paragraph_2" id="paragraph_2" placeholder="Enter paragraph" required> {{  $details->where('type', 'paragraph_2')->first()->message ?? '' }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paragraph_3">Paragraph-3</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="paragraph_3" id="paragraph_3" placeholder="Enter paragraph" required> {{  $details->where('type', 'paragraph_3')->first()->message ?? '' }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="animated_text_1">Animated Text-1</label>
                                                    <input type="text" class="form-control" name="animated_text_1" id="animated_text_1" value="{{  optional($details->where('type', 'animated_text_1')->first())->message ?? '' }}" placeholder="Enter animated text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="animated_text_2">Animated Text-2</label>
                                                    <input type="text" class="form-control" name="animated_text_2" id="animated_text_2" value="{{  optional($details->where('type', 'animated_text_2')->first())->message ?? '' }}" placeholder="Enter animated text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="animated_text_3">Animated Text-3</label>
                                                    <input type="text" class="form-control" name="animated_text_3" id="animated_text_3" value="{{  optional($details->where('type', 'animated_text_3')->first())->message ?? '' }}" placeholder="Enter animated text">
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