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
                                <form method="post" action="{{ route('Salesprojects.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'sub_title')->first())->message ?? '' }}">
                                    </div>                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Background Image</label>
                                        <input type="url" id="background_image" name="background_image" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'background_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title Image</label>
                                        <input type="url" id="title_image" name="title_image" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'title_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Mid Text</label>
                                        <input type="text" id="mid_text" name="mid_text" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'mid_text')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description</label>
                                        <input type="text" id="description" name="description" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'description')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Para 1</label>
                                        <input type="text" id="para_1" name="para_1" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'para_1')->first())->message ?? '' }}">
                                    </div>                                    
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Product Bannar Image</label>
                                        <input type="url" id="product_bannar_img" name="product_bannar_img" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'product_bannar_img')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Product Description Image</label>
                                        <input type="url" id="product_desc_img" name="product_desc_img" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'product_desc_img')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Footer Image</label>
                                        <input type="url" id="footer_image" name="footer_image" required class="form-control" value="{{  optional($projectSectionContent->where('type', 'footer_image')->first())->message ?? '' }}">
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