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
                                <form method="post" action="{{ route('Salesproject-6.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Underlined Label</label>
                                        <input type="text" id="underlined_label" name="underlined_label" required class="form-control" value="{{  optional($projectSection6->where('type', 'underlined_label')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 1</label>
                                        <input type="text" id="title_1" name="title_1" required class="form-control" value="{{  optional($projectSection6->where('type', 'title_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description</label>
                                        <input type="text" id="description" name="description" required class="form-control" value="{{  optional($projectSection6->where('type', 'description')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bannar Image 1</label>
                                        <input type="url" id="bannar_image_1" name="bannar_image_1" required class="form-control" value="{{  optional($projectSection6->where('type', 'bannar_image_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bannar Image 2</label>
                                        <input type="url" id="bannar_image_2" name="bannar_image_2" required class="form-control" value="{{  optional($projectSection6->where('type', 'bannar_image_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bannar Image 2 title</label>
                                        <input type="text" id="bannar_image_2_title" name="bannar_image_2_title" required class="form-control" value="{{  optional($projectSection6->where('type', 'bannar_image_2_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 1</label>
                                        <input type="text" id="quote_1" name="quote_1" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 1 Description</label>
                                        <input type="text" id="quote_1_desc" name="quote_1_desc" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_1_desc')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 1 Image</label>
                                        <input type="url" id="quote_1_image" name="quote_1_image" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_1_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 2</label>
                                        <input type="text" id="quote_2" name="quote_2" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 2 Description</label>
                                        <input type="text" id="quote_2_desc" name="quote_2_desc" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_2_desc')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Quote 2 Image</label>
                                        <input type="url" id="quote_2_image" name="quote_2_image" required class="form-control" value="{{  optional($projectSection6->where('type', 'quote_2_image')->first())->message ?? '' }}">
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