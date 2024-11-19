@include('auth.layouts.app')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
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
                                    <h3 class="card-title">Update Details</h3>
                                </div>

                                <form action="{{ route('formContents.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <label for="section-1" class="h5">Section-1 -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-1 Title-1</label>
                                                <input type="text" id="section_1_title_1" name="section_1_title_1"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_1_title_1')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-1 Title-2</label>
                                                <input type="text" id="section_1_title_2" name="section_1_title_2"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_1_title_2')->first())->message ?? '' }}">
                                            </div>
                                        </div>

                                        <label for="section-2" class="h5">Section-2 -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-2 Title-1</label>
                                                <input type="text" id="section_2_title_1" name="section_2_title_1"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_2_title_1')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-2 Title-2</label>
                                                <input type="text" id="section_2_title_2" name="section_2_title_2"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_2_title_2')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-2 Subtitle</label>
                                                <input type="text" id="section_2_subtitle" name="section_2_subtitle"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_2_subtitle')->first())->message ?? '' }}">
                                            </div>
                                        </div>

                                        <label for="section-3" class="h5">Section-3 -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-3 Title-1</label>
                                                <input type="text" id="section_3_title_1" name="section_3_title_1" required
                                                    class="form-control"
                                                    value="{{ optional($details->where('type', 'section_3_title_1')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-3 Title-2</label>
                                                <input type="text" id="section_3_title_2" name="section_3_title_2"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'section_3_title_2')->first())->message ?? '' }}">
                                            </div>
                                        </div>

                                        <label for="section-4" class="h5">Section-4 -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Section-4 Title</label>
                                                <input type="text" id="section_4_title" name="section_4_title" required
                                                    class="form-control"
                                                    value="{{ optional($details->where('type', 'section_4_title')->first())->message ?? '' }}">
                                            </div>
                                        </div>

                                        <label for="modal">Modal Section</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Model Title</label>
                                                <input type="text" id="model_title" name="model_title" required class="form-control" value="{{  optional($details->where('type', 'model_title')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Modal Description</label>
                                                <textarea type="text" id="modal_description" name="modal_description" required class="form-control">{{  optional($details->where('type', 'modal_description')->first())->message ?? '' }}</textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Button Text</label>
                                                <input type="text" id="button_text" name="button_text" required class="form-control" value="{{  optional($details->where('type', 'button_text')->first())->message ?? '' }}">
                                            </div>
                                        </div>
                                        
                                        <label for="Thanks" class="h5">Contact Section -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Main Title</label>
                                                <input type="text" id="contact_title" name="contact_title"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'contact_title')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Info</label>
                                                <input type="text" id="contact_info" name="contact_info"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'contact_info')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Image-URL</label>
                                                <input type="text" id="contact_image" name="contact_image"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'contact_image')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Contact Text</label>
                                                <input type="text" id="contact_text" name="contact_text"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'contact_text')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Contact Number</label>
                                                <input type="text" id="contact_number" name="contact_number"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'contact_number')->first())->message ?? '' }}">
                                            </div>
                                        </div>

                                        <label for="Thanks" class="h5">Message Response Section -</label>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Message Response</label>
                                                <input type="text" id="message_response" name="message_response"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'message_response')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Greeting Message</label>
                                                <input type="text" id="greeting_message" name="greeting_message"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'greeting_message')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Link Prompt Text</label>
                                                <input type="text" id="link_prompt_text" name="link_prompt_text"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'link_prompt_text')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Social Media Text</label>
                                                <input type="text" id="social_media_text" name="social_media_text"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'social_media_text')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Display Picture</label>
                                                <input type="text" id="display_picture" name="display_picture"
                                                    required class="form-control"
                                                    value="{{ optional($details->where('type', 'display_picture')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="control-label">Email SVG</label>
                                                <input type="text" id="email_svg" name="email_svg" required
                                                    class="form-control"
                                                    value="{{ optional($details->where('type', 'email_svg')->first())->message ?? '' }}">
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
