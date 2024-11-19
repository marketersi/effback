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
                        
                         @if (Session::has('error'))
                        <div class="alert alert-danger" id="errorMessage">
                            {{ Session::get('error') }}
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
                                    <h3 class="card-title">Update Feedback</h3>
                                </div>

                                <form action="{{route('feedback.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="update_id" @if(isset($feedback_details)) value="{{$feedback_details->id}}" @endif>
                                                    <label for="feedbackTitle">Feedback Title</label>
                                                    <input type="text" class="form-control" name="feedbackTitle" id="feedbackTitle" @if(isset($feedback_details)) value='{{ $feedback_details->feedback_title }}' @endif placeholder="Enter feedback title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="feedbackContent">Feedback content</label>
                                                    <textarea type="text" cols="10" rows="5" class="form-control" name="feedbackContent" id="feedbackContent" placeholder="Enter feedback content">@if(isset($feedback_details)){{ $feedback_details->feedback_content }}@endif</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="feedbackSubtitle">Feedback subtitle</label>

                                                    <input type="text" class="form-control" name="feedbackSubtitle" @if(isset($feedback_details)) value='{{ $feedback_details->feedback_subtitle }}' @endif id="feedbackSubtitle" placeholder="Enter Feedback subtitle">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="provinces">Select a Province:</label>
                                                <select id="provinces" name="provinces" class="form-control">
                                                    <option value="dolnośląskie">Dolnośląskie</option>
                                                    <option value="kujawsko-pomorskie">Kujawsko-Pomorskie</option>
                                                    <option value="lubelskie">Lubelskie</option>
                                                    <option value="lubuskie">Lubuskie</option>
                                                    <option value="łódzkie">Łódzkie</option>
                                                    <option value="małopolskie">Małopolskie</option>
                                                    <option value="mazowieckie">Mazowieckie</option>
                                                    <option value="opolskie">Opolskie</option>
                                                    <option value="podkarpackie">Podkarpackie</option>
                                                    <option value="podlaskie">Podlaskie</option>
                                                    <option value="pomorskie">Pomorskie</option>
                                                    <option value="śląskie">Śląskie</option>
                                                    <option value="świętokrzyskie">Świętokrzyskie</option>
                                                    <option value="warmińsko-mazurskie">Warmińsko-Mazurskie</option>
                                                    <option value="wielkopolskie">Wielkopolskie</option>
                                                    <option value="zachodniopomorskie">Zachodniopomorskie</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="feedbackSubtitle">Capital City</label>
                                                <input type="text" class="form-control" name="capital_city"
                                                    @if (isset($feedback_details)) value='{{ $feedback_details->capital_city }}' @endif
                                                    id="capital_city" placeholder="Enter Feedback subtitle">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="feedbackSubtitle">Company Name</label>
                                                <input type="text" class="form-control" name="company_name"
                                                    @if (isset($feedback_details)) value='{{ $feedback_details->company_name }}' @endif
                                                    id="company_name" placeholder="Enter Feedback subtitle">
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