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
                                <div class="p-3">
                                <a href="javascript:void(0);" class="btn btn-success float-right" id="addfields">
                                    Add Url
                                </a>
                                </div>
                                <form action="{{route('brand-one.update')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="brand_title" id="brand_title" placeholder="Enter Brand Title" value="{{ $user->title }}" required>
                                                </div>
                                            </div>
                                            @php
                        $imageUrls = json_decode($user->image, true);
                    @endphp

                    @foreach($imageUrls as $index => $imageUrl)
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="text" class="form-control" name="image[]" id="image{{$index + 1}}" placeholder="Enter Image URL" value="{{ $imageUrl }}" required>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-12">
                                            <div class="form-group appField"></div>
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

<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
    $(document).on('click', '#addfields', function(e) {
   
    e.preventDefault();
    var fieldHTML = `
        <div class="form-group">
            <label for="image">Image</label>
            <input type="url" name="image[]" class="form-control" id="image" placeholder="Enter Image URL">
            <a href="javascript:void(0);" class="text-dark removefields">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>
    `;
    $('.appField').append(fieldHTML);
});

$(document).on('click', '.removefields', function(e) {
    e.preventDefault();
    $(this).closest('.form-group').remove();
});

  </script>
</body>