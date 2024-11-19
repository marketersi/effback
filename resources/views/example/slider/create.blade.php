@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Slider Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Slider/Add</li>
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
                                    <h3 class="card-title">Add Slider</h3>
                                </div>
                                <div class="p-3">
                                    <a href="javascript:void(0);" class="btn btn-success addfields float-right">
                                        Add Url
                                    </a>
                                </div>
                                <form action="{{route('example.sliderStore')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        <div class="row">

                                          <div class="col-12">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value="{{  json_decode(optional($details->where('type', 'title')->first())->message) ?? '' }}" placeholder="Enter title" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="subtitle">Subtitle</label>
                                                    <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{  json_decode(optional($details->where('type', 'subtitle')->first())->message) ?? '' }}" placeholder="Enter subtitle" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="sliderText">Slider Text</label>
                                                    <input type="text" class="form-control" name="sliderText" id="sliderText" value="{{  json_decode(optional($details->where('type', 'sliderText')->first())->message) ?? '' }}" placeholder="Enter text" required>
                                                </div>
                                            </div>
                                            
                                            @foreach($details as $data)
                                                @php
                                                    $imageUrls = json_decode($data->message, true);
                                                @endphp
                                                @if(!empty($data->type === 'image'))
                                                    @foreach($imageUrls as $index => $imageUrl)
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="image">Image {{$index + 1}}</label>
                                                                <input type="url" class="form-control" name="image[]" id="image" value="{{  $imageUrl ?? '' }}" placeholder="Enter image url" required>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                            <div class="col-12">
                                            <div class="form-group appField"></div>
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

<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
    $(document).on('click', '.addfields', function(e) {
    e.preventDefault();
    var fieldHTML = `
        <div class="form-group">
            <label for="image">Image</label>
            <input type="url" name="image[]" class="form-control" id="image" placeholder="Enter image url">
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