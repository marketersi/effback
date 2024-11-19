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
                                    <h3 class="card-title">Brand-1</h3>
                                </div>
                                <form action="{{route('opinion-rating.update')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User Name" value="{{ $user->user_name }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Opinion</label>
                                                    <input type="text" class="form-control" name="opinion" id="opinion" placeholder="Enter Opinion" value="{{ $user->opinion }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Rating</label>
                                                    <input type="text" class="form-control" name="rating" id="rating" placeholder="Enter Rating" value="{{ $user->rating }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="text" class="form-control" name="image" id="image" placeholder="Enter Image URL" value="{{ $user->image }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Paragraph</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control"  name="para" id="para" placeholder="Enter Paragraph">@isset($user) {{ $user->para }} @endisset</textarea>
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