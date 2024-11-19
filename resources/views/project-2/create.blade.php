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
                                <form method="post" action="{{ route('Salesproject-2.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Logo Image</label>
                                        <input type="url" id="logo_image" name="logo_image" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'logo_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Underlined Label</label>
                                        <input type="text" id="underlined_label" name="underlined_label" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'underlined_label')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description</label>
                                        <input type="text" id="description" name="description" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'description')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description-2</label>
                                        <input type="text" id="description_2" name="description_2" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'description_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bannar Image</label>
                                        <input type="url" id="bannar_image" name="bannar_image" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'bannar_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Background Image</label>
                                        <input type="url" id="background_image" name="background_image" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'background_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Background Image Title</label>
                                        <input type="text" id="background_image_title" name="background_image_title" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'background_image_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote</label>
                                        <input type="text" id="quote" name="quote" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'quote')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 1</label>
                                        <input type="text" id="title_1" name="title_1" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'title_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title 1</label>
                                        <input type="text" id="sub_title_1" name="sub_title_1" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'sub_title_1')->first())->message ?? '' }}">
                                    </div>   
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bottom Bannar Image</label>
                                        <input type="url" id="bottom_bannar_image" name="bottom_bannar_image" required class="form-control" value="{{  optional($projectSection2Content->where('type', 'bottom_bannar_image')->first())->message ?? '' }}">
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