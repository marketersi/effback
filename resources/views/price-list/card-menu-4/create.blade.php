@include("auth.layouts.app")

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

                                <form action="{{route('fourth-price-menu.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                       
                                       <div class="form-group row">
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Main Title</label>
                                       <input type="text" id="menu_title" name="menu_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'menu_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-1 Title</label>
                                       <input type="text" id="section1_title" name="section1_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'section1_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-1 Sub Title</label>
                                       <input type="text" id="section1_subtitle" name="section1_subtitle" required class="form-control" value="{{  optional($fourthCard->where('type', 'section1_subtitle')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-1 Button Text</label>
                                       <input type="text" id="section1_buttonText" name="section1_buttonText" required class="form-control" value="{{  optional($fourthCard->where('type', 'section1_buttonText')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Meta Title</label>
                                       <input type="text" id="meta_title" name="meta_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'meta_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Meta Info</label>
                                       <input type="text" id="meta_info" name="meta_info" required class="form-control" value="{{  optional($fourthCard->where('type', 'meta_info')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Meta Button-1 Text</label>
                                       <input type="text" id="meta_button1Text" name="meta_button1Text" required class="form-control" value="{{  optional($fourthCard->where('type', 'meta_button1Text')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Meta Button-2 Text</label>
                                       <input type="text" id="meta_button2Text" name="meta_button2Text" required class="form-control" value="{{  optional($fourthCard->where('type', 'meta_button2Text')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Website Text</label>
                                       <input type="text" id="websiteText" name="websiteText" required class="form-control" value="{{  optional($fourthCard->where('type', 'websiteText')->first())->message ?? '' }}">
                                   </div>
                               
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-2 Title</label>
                                       <input type="text" id="section2_title" name="section2_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'section2_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-2 Button Text</label>
                                       <input type="text" id="section2_buttonText" name="section2_buttonText" required class="form-control" value="{{  optional($fourthCard->where('type', 'section2_buttonText')->first())->message ?? '' }}">
                                   </div>
                                  <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-3 Title-1</label>
                                       <input type="text" id="section3_title_1" name="section3_title_1" required class="form-control" value="{{  optional($fourthCard->where('type', 'section3_title_1')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Section-3 Title-2</label>
                                    <input type="text" id="section3_title_2" name="section3_title_2" required class="form-control" value="{{  optional($fourthCard->where('type', 'section3_title_2')->first())->message ?? '' }}">
                                </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-3 First Subtitle</label>
                                       <input type="text" id="section3_subtitle1" name="section3_subtitle1" required class="form-control" value="{{  optional($fourthCard->where('type', 'section3_subtitle1')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-3 Second Subtitle</label>
                                       <input type="text" id="section3_subtitle2" name="section3_subtitle2" required class="form-control" value="{{  optional($fourthCard->where('type', 'section3_subtitle2')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-4 Title</label>
                                       <input type="text" id="section4_title" name="section4_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'section4_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-4 Subitle</label>
                                       <input type="text" id="section4_subtitle" name="section4_subtitle" required class="form-control" value="{{  optional($fourthCard->where('type', 'section4_subtitle')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Section-4 Button Text</label>
                                       <input type="text" id="section4_buttonText" name="section4_buttonText" required class="form-control" value="{{  optional($fourthCard->where('type', 'section4_buttonText')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Contact Title</label>
                                       <input type="text" id="contact_title" name="contact_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'contact_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Contact Info</label>
                                       <input type="text" id="contact_info" name="contact_info" required class="form-control" value="{{  optional($fourthCard->where('type', 'contact_info')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Contact Image</label>
                                       <input type="text" id="contact_image" name="contact_image" required class="form-control" value="{{  optional($fourthCard->where('type', 'contact_image')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Contact Text</label>
                                       <input type="text" id="contactText" name="contactText" required class="form-control" value="{{  optional($fourthCard->where('type', 'contactText')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Telephone</label>
                                       <input type="text" id="contact_telephone_no" name="contact_telephone_no" required class="form-control" value="{{  optional($fourthCard->where('type', 'contact_telephone_no')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">SVG Link</label>
                                       <input type="text" id="svgLink" name="svgLink" required class="form-control" value="{{  optional($fourthCard->where('type', 'svgLink')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Greeting Message</label>
                                        <input type="text" id="greeting_message" name="greeting_message" required class="form-control" value="{{  optional($fourthCard->where('type', 'greeting_message')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Display Picture</label>
                                        <input type="text" id="display_picture" name="display_picture" required class="form-control" value="{{  optional($fourthCard->where('type', 'display_picture')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Feedback Title</label>
                                        <input type="text" id="feedback_title" name="feedback_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'feedback_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Feedback Button Text</label>
                                        <input type="text" id="feedback_buttonText" name="feedback_buttonText" required class="form-control" value="{{  optional($fourthCard->where('type', 'feedback_buttonText')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Social Media Title</label>
                                        <input type="text" id="socialMedia_title" name="socialMedia_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'socialMedia_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Social Media Subtitle</label>
                                        <input type="text" id="socialMedia_subtitle" name="socialMedia_subtitle" required class="form-control" value="{{  optional($fourthCard->where('type', 'socialMedia_subtitle')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Social Media Link Text</label>
                                       <input type="text" id="link_text" name="link_text" required class="form-control" value="{{  optional($fourthCard->where('type', 'link_text')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Social Media Link</label>
                                       <input type="text" id="link" name="link" required class="form-control" value="{{  optional($fourthCard->where('type', 'link')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Social Button Text</label>
                                       <input type="text" id="social_button_text" name="social_button_text" required class="form-control" value="{{  optional($fourthCard->where('type', 'social_button_text')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Form Three Modal Title</label>
                                       <input type="text" id="modal_title" name="modal_title" required class="form-control" value="{{  optional($fourthCard->where('type', 'modal_title')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Form Three Modal Info</label>
                                       <input type="text" id="modal_info" name="modal_info" required class="form-control" value="{{  optional($fourthCard->where('type', 'modal_info')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Form Three Modal Info 2</label>
                                       <input type="text" id="modal_info_2" name="modal_info_2" required class="form-control" value="{{  optional($fourthCard->where('type', 'modal_info_2')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Form Three Modal Button-1 Text</label>
                                       <input type="text" id="modal_button1Text" name="modal_button1Text" required class="form-control" value="{{  optional($fourthCard->where('type', 'modal_button1Text')->first())->message ?? '' }}">
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       <label class="control-label">Form Three Modal Button-2 Text</label>
                                       <input type="text" id="modal_button2Text" name="modal_button2Text" required class="form-control" value="{{  optional($fourthCard->where('type', 'modal_button2Text')->first())->message ?? '' }}">
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