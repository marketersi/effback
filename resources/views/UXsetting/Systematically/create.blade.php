@include('auth.layouts.app')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Systematically Form</h1>
                </div>
                <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div> -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('UXsystematically.store') }}" class="needs-validation"
                            novalidate>
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image</label>
                                        <input type="url" id="image" name="image" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'image')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'title')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Subtitle</label>
                                        <input type="text" id="subtitle" name="subtitle" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'subtitle')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description</label>
                                        <input type="text" id="description" name="description" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'description')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-Right</label>
                                        <input type="url" id="right_image" name="right_image" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'right_image')->first()->message ?? '' }}">
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

                <script>
                    $(function() {
                        bsCustomFileInput.init();
                    });
                </script>
