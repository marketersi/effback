@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Brand Form</h1>
                        </div>
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
                                <form method="post" action="{{ route('brandsection.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Image 1</label>
                                        <input type="url" id="brand_image1" name="brand_image1" required class="form-control" value="{{  optional($details->where('type', 'brand_image1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Image 2</label>
                                        <input type="url" id="brand_image2" name="brand_image2" required class="form-control" value="{{  optional($details->where('type', 'brand_image2')->first())->message ?? '' }}">
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Banner Image</label>
                                        <input type="url" id="banner_image" name="banner_image" required class="form-control" value="{{  optional($details->where('type', 'banner_image')->first())->message ?? '' }}">
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Banner Video</label>
                                        <input type="url" id="banner_video" name="banner_video" required class="form-control" value="{{  optional($details->where('type', 'banner_video')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Logo 1</label>
                                        <input type="text" id="brand_logo1" name="brand_logo1" required class="form-control" value="{{  optional($details->where('type', 'brand_logo1')->first())->message ?? '' }}">

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Logo 2</label>
                                        <input type="text" id="brand_logo2" name="brand_logo2" required class="form-control" value="{{  optional($details->where('type', 'brand_logo2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Banner Text</label>
                                        <input type="text" id="banner_text" name="banner_text" required class="form-control" value="{{  optional($details->where('type', 'banner_text')->first())->message ?? '' }}">
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