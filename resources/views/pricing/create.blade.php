@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Hero Section Form</h1>
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
                                <form method="post" action="{{ route('pricing.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'sub_title')->first())->message ?? '' }}">
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image Left</label>
                                        <input type="url" id="image_left" name="image_left" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'image_left')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image Left Description</label>
                                        <input type="text" id="image_left_desc" name="image_left_desc" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'image_left_desc')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image Right</label>
                                        <input type="url" id="image_right" name="image_right" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'image_right')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image Right Description</label>
                                        <input type="text" id="image_right_desc" name="image_right_desc" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'image_right_desc')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Para 1</label>
                                        <input type="text" id="para_1" name="para_1" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'para_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Para 2</label>
                                        <input type="text" id="para_2" name="para_2" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'para_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bottom text</label>
                                        <input type="text" id="bottom_text" name="bottom_text" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'bottom_text')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Logo</label>
                                        <input type="url" id="brand_logo" name="brand_logo" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'brand_logo')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Banner Image</label>
                                        <input type="url" id="banner_img" name="banner_img" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'banner_img')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Form Title</label>
                                        <input type="text" id="form_title" name="form_title" required class="form-control" value="{{  optional($pricingSectionContent->where('type', 'form_title')->first())->message ?? '' }}">
                                    </div>
                                </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        
  <script>
$(function () {
  bsCustomFileInput.init();
});
</script>