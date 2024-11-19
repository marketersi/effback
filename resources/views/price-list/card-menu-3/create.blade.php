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
                                    <h3 class="card-title">Add Third Price Menu</h3>
                                </div>
            
                                <form action="{{route('third-price-menu.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">

                                                    <label>Menu Text</label>
                                                    <input type="text" class="form-control" name="menuText" id="menuText" value="{{  optional($thirdCard->where('type', 'menuText')->first())->message ?? '' }}" placeholder="Enter Menu Text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-1 Title</label>
                                                    <input type="text" class="form-control" name="form1_title" id="form1_title" value="{{  optional($thirdCard->where('type', 'form1_title')->first())->message ?? '' }}" placeholder="Enter Form-1 Title">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-1 Subtitle</label>
                                                    <input type="text" class="form-control" name="form1_subtitle" id="form1_subtitle" value="{{  optional($thirdCard->where('type', 'form1_subtitle')->first())->message ?? '' }}" placeholder="Enter Form-1 Subtitle">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-1 Button Text</label>
                                                    <input type="text" class="form-control" name="form1_buttonText" id="form1_buttonText" value="{{  optional($thirdCard->where('type', 'form1_buttonText')->first())->message ?? '' }}" placeholder="Enter Form-1 Button Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-1 Website Text</label>
                                                    <input type="text" class="form-control" name="form1_websiteText" id="form1_websiteText" value="{{  optional($thirdCard->where('type', 'form1_websiteText')->first())->message ?? '' }}" placeholder="Enter Form-1 Website Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-2 Title</label>
                                                    <input type="text" class="form-control" name="form2_title" id="form2_title" value="{{  optional($thirdCard->where('type', 'form2_title')->first())->message ?? '' }}" placeholder="Enter Form-2 Title">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-2 Button Text</label>
                                                    <input type="text" class="form-control" name="form2_buttonText" id="form2_buttonText" value="{{  optional($thirdCard->where('type', 'form2_buttonText')->first())->message ?? '' }}" placeholder="Enter Form-2 Button Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="form3_textareaTitle">Form-3 Textarea Title</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control"  name="form3_textareaTitle" id="form3_textareaTitle" placeholder="Enter Form-3 Textarea Title">{{ optional($thirdCard->where('type', 'form3_textareaSubtitle')->first())->message ?? '' }}</textarea>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="form3_textareaSubtitle">Form-3 Textarea Subtitle</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control"  name="form3_textareaSubtitle" id="form3_textareaSubtitle" placeholder="Enter Form-3 Textarea Subtitle">{{ optional($thirdCard->where('type', 'form3_textareaSubtitle')->first())->message ?? '' }}</textarea>
                                                    
                                                </div>
                                            </div>
                                         

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-3 Input Title</label>
                                                    <input type="text" class="form-control" name="form3_inputTitle" id="form3_inputTitle" value="{{  optional($thirdCard->where('type', 'form3_inputTitle')->first())->message ?? '' }}" placeholder="Enter Form-3 Input Title">
                                                </div>
                                            </div>
                                         

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-3 Button Text</label>
                                                    <input type="text" class="form-control" name="form3_buttonText" id="form3_buttonText" value="{{  optional($thirdCard->where('type', 'form3_buttonText')->first())->message ?? '' }}" placeholder="Enter Form-3 Button Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-3 Modal Info</label>
                                                    <input type="text" class="form-control" name="form3_modal_info" id="form3_modal_info" value="{{  optional($thirdCard->where('type', 'form3_modal_info')->first())->message ?? '' }}" placeholder="Enter Form-3 Modal Info">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-3 Modal Button Text</label>
                                                    <input type="text" class="form-control" name="form3_modal_buttonText" id="form3_modal_buttonText" value="{{  optional($thirdCard->where('type', 'form3_modal_buttonText')->first())->message ?? '' }}" placeholder="Enter Form-3 Modal Button Text">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Title</label>
                                                    <input type="text" class="form-control" name="form4_title" id="form4_title" value="{{  optional($thirdCard->where('type', 'form4_title')->first())->message ?? '' }}" placeholder="Enter Form-4 Title">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Subtitle</label>
                                                    <input type="text" class="form-control" name="form4_subtitle" id="form4_subtitle" value="{{  optional($thirdCard->where('type', 'form4_subtitle')->first())->message ?? '' }}" placeholder="Enter Form-4 Subtitle">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Button Text</label>
                                                    <input type="text" class="form-control" name="form4_buttonText" id="form4_buttonText" value="{{  optional($thirdCard->where('type', 'form4_buttonText')->first())->message ?? '' }}" placeholder="Enter Form-4 Button Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Contact Title</label>
                                                    <input type="text" class="form-control" name="form4_contact_title" id="form4_contact_title" value="{{  optional($thirdCard->where('type', 'form4_contact_title')->first())->message ?? '' }}" placeholder="Enter Form-4 Contact Title">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Contact Info</label>
                                                    <input type="text" class="form-control" name="form4_contact_info" id="form4_contact_info" value="{{  optional($thirdCard->where('type', 'form4_contact_info')->first())->message ?? '' }}" placeholder="Enter Form-4 Contact Info">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Contact Image</label>
                                                    <input type="url" class="form-control" name="form4_contact_image" id="form4_contact_image" value="{{  optional($thirdCard->where('type', 'form4_contact_image')->first())->message ?? '' }}" placeholder="Enter Form-4 Contact Image">
                                                </div>
                                            </div>
                                         

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Contact Text</label>
                                                    <input type="text" class="form-control" name="form4_contact_contactText" id="form4_contact_contactText" value="{{  optional($thirdCard->where('type', 'form4_contact_contactText')->first())->message ?? '' }}" placeholder="Enter Form-4 Contact Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Form-4 Contact Number</label>
                                                    <input type="text" class="form-control" name="form4_contact_tel" id="form4_contact_tel" value="{{  optional($thirdCard->where('type', 'form4_contact_tel')->first())->message ?? '' }}" placeholder="Enter Form-4 Contact Number">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Svg Link</label>
                                                    <input type="url" class="form-control" name="feedback_svgLink" id="feedback_svgLink" value="{{  optional($thirdCard->where('type', 'feedback_svgLink')->first())->message ?? '' }}" placeholder="Enter Feedback Svg Link">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Display Picture</label>
                                                    <input type="url" class="form-control" name="feedback_displayPicture" id="feedback_displayPicture" value="{{  optional($thirdCard->where('type', 'feedback_displayPicture')->first())->message ?? '' }}" placeholder="Enter Feedback Display Picture">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Message</label>
                                                    <input type="text" class="form-control" name="feedback_message" id="feedback_message" value="{{  optional($thirdCard->where('type', 'feedback_message')->first())->message ?? '' }}" placeholder="Enter Feedback Message">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Title</label>
                                                    <input type="text" class="form-control" name="feedback_title" id="feedback_title" value="{{  optional($thirdCard->where('type', 'feedback_title')->first())->message ?? '' }}" placeholder="Enter Feedback Title">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Social Title</label>
                                                    <input type="yexy" class="form-control" name="feedback_social_title" id="feedback_social_title" value="{{  optional($thirdCard->where('type', 'feedback_social_title')->first())->message ?? '' }}" placeholder="Enter Feedback Social Title">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Social Subtitle</label>
                                                    <input type="text" class="form-control" name="feedback_social_subtitle" id="feedback_social_subtitle" value="{{  optional($thirdCard->where('type', 'feedback_social_subtitle')->first())->message ?? '' }}" placeholder="Enter Feedback Social Subtitle">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Social Link Text</label>
                                                    <input type="text" class="form-control" name="feedback_social_linkText" id="feedback_social_linkText" value="{{  optional($thirdCard->where('type', 'feedback_social_linkText')->first())->message ?? '' }}" placeholder="Enter Feedback Social Link Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Social Link</label>
                                                    <input type="text" class="form-control" name="feedback_social_link" id="feedback_social_link" value="{{  optional($thirdCard->where('type', 'feedback_social_link')->first())->message ?? '' }}" placeholder="Enter Feedback Social Link">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Social Botton Text</label>
                                                    <input type="text" class="form-control" name="feedback_social_bottonText" id="feedback_social_bottonText" value="{{  optional($thirdCard->where('type', 'feedback_social_bottonText')->first())->message ?? '' }}" placeholder="Enter Feedback Social Botton Text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Feedback Button Text</label>
                                                    <input type="text" class="form-control" name="feedback_buttonText" id="feedback_buttonText" value="{{  optional($thirdCard->where('type', 'feedback_buttonText')->first())->message ?? '' }}" placeholder="Enter Feedback Button Text">
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