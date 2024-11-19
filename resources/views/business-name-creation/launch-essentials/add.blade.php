@include("auth.layouts.app")

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Launch Essentials</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Business Name Creation / Launch Essentials / Add</li>
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
                                    <h3 class="card-title">Add Launch Essentials</h3>
                                </div>

                                <form action="{{route('businessNameCreation.launchEssentialsStore')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">

                                          <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="background_image">Background Image</label>
                                                    <input type="url" class="form-control" name="background_image" id="background_image" value='{{ old("background_image") }}' placeholder="Enter advisor image url">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title">Advice Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value='{{ old("title") }}' placeholder="Enter advice title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Advice Description</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="description" id="description" placeholder="Enter advice description">{{old('description')}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="section_title">Section Title</label>
                                                    <input type="text" class="form-control" name="section_title" id="section_title" value='{{ old("section_title") }}' placeholder="Enter section title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="section_subtitle">Section Subtitle</label>
                                                    <input type="text" class="form-control" name="section_subtitle" id="section_subtitle" value='{{ old("section_subtitle") }}' placeholder="Enter section subtitle text">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="list_title">List Title</label>
                                                    <input type="text" class="form-control" name="list_title" id="list_title" value='{{ old("list_title") }}' placeholder="Enter list title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="list_element1">List Element 1</label>
                                                    <input type="text" class="form-control" name="list_element1" id="list_element1" value='{{ old("list_element1") }}' placeholder="Enter list element">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="list_element2">List Element 2</label>
                                                    <input type="text" class="form-control" name="list_element2" id="list_element2" value='{{ old("list_element2") }}' placeholder="Enter list element">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="list_element3">List Element 3</label>
                                                    <input type="text" class="form-control" name="list_element3" id="list_element3" value='{{ old("list_element3") }}' placeholder="Enter list element">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="list_element4">List Element 4</label>
                                                    <input type="text" class="form-control" name="list_element4" id="list_element4" value='{{ old("list_element4") }}' placeholder="Enter list element">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="section_paragraph">Section Paragraph</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="section_paragraph" id="section_paragraph" placeholder="Enter section paragraph">{{old('section_paragraph')}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="banner_url">Banner URL</label>
                                                    <input type="text" class="form-control" name="banner_url" id="banner_url" value='{{ old("banner_url") }}' placeholder="Enter banner url">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="policy_image">Policy Image</label>
                                                    <input type="text" class="form-control" name="policy_image" id="policy_image" value='{{ old("policy_image") }}' placeholder="Enter policy image url">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="policy_title">Policy Title</label>
                                                    <input type="text" class="form-control" name="policy_title" id="policy_title" value='{{ old("policy_title") }}' placeholder="Enter policy title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="policy_description">Policy Description</label>
                                                    <textarea cols="5" rows="5" class="form-control" name="policy_description" id="policy_description" placeholder="Enter policy description">{{old('policy_description')}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="btn_title">Button Title</label>
                                                    <input type="text" class="form-control" name="btn_title" id="btn_title" value='{{ $launch_essentials_Details->btn_title }}' placeholder="Enter button title">
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