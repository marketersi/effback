@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Section 8  </h1>
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
                                    <h3 class="card-title">Fill Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                        
                                <form method="post" action="{{ route('team.section8.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="section8_title" name="section8_title" required class="form-control" value ="{{  optional($details->where('type', 'section8_title')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Image-1</label>
                                        <input type="url" id="section8_image_1" name="section8_image_1" required class="form-control" value ="{{  optional($details->where('type', 'section8_image_1')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Image-2</label>
                                        <input type="url" id="section8_image_2" name="section8_image_2" required class="form-control" value ="{{  optional($details->where('type', 'section8_image_2')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-1</label>
                                        <textarea id="section8_discription_1" name="section8_discription_1" required class="form-control">{{  optional($details->where('type', 'section8_discription_1')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-2</label>
                                        <textarea id="section8_discription_2" name="section8_discription_2" required class="form-control">{{  optional($details->where('type', 'section8_discription_2')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-3</label>
                                        <textarea id="section8_discription_3" name="section8_discription_3" required class="form-control">{{  optional($details->where('type', 'section8_discription_3')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-4</label>
                                        <textarea id="section8_discription_4" name="section8_discription_4" required class="form-control">{{  optional($details->where('type', 'section8_discription_4')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-5</label>
                                        <textarea id="section8_discription_5" name="section8_discription_5" required class="form-control">{{  optional($details->where('type', 'section8_discription_5')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-6</label>
                                        <textarea id="section8_discription_6" name="section8_discription_6" required class="form-control">{{  optional($details->where('type', 'section8_discription_6')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label class="control-label">Discription-7</label>
                                        <textarea id="section8_discription_7" name="section8_discription_7" required class="form-control">{{  optional($details->where('type', 'section8_discription_7')->first())->message ?? '' }}</textarea>
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