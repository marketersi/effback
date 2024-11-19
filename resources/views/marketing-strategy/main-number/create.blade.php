@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Main Number Form</h1>
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
                                <form method="post" action="{{ route('main-num.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Percentage Image-1</label>
                                        <input type="url" id="percentage_image_1" name="percentage_image_1" required class="form-control" value="{{  $details->where('type', 'percentage_image_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info-1</label>
                                        <textarea type="text" id="info_1" name="info_1" required class="form-control">{{  $details->where('type', 'info_1')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Percentage Image-2</label>
                                        <input type="url" id="percentage_image_2" name="percentage_image_2" required class="form-control" value="{{  $details->where('type', 'percentage_image_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info-2</label>
                                        <textarea type="text" id="info_2" name="info_2" required class="form-control">{{  $details->where('type', 'info_2')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Asterisk Text</label>
                                        <input type="text" id="asterisk_text" name="asterisk_text" required class="form-control" value="{{  $details->where('type', 'asterisk_text')->first()->message ?? '' }}">
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
$(function () {
  bsCustomFileInput.init();
});
</script>