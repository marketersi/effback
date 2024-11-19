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
                                <form method="post" action="{{ route('howItWorks-steps.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Main Title</label>
                                        <input type="text" id="main_title" name="main_title" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'main_title')->first())->message ?? '' }}">
                                    </div>                                            
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 1</label>
                                        <input type="url" id="image_1" name="image_1" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'image_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 1</label>
                                        <input type="text" id="title_1" name="title_1" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'title_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title 1</label>
                                        <input type="text" id="sub_title_1" name="sub_title_1" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'sub_title_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description 1</label>
                                        <input type="text" id="description_1" name="description_1" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'description_1')->first())->message ?? '' }}">
                                    </div>                                      
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 2</label>
                                        <input type="url" id="image_2" name="image_2" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'image_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 2</label>
                                        <input type="text" id="title_2" name="title_2" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'title_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title 2</label>
                                        <input type="text" id="sub_title_2" name="sub_title_2" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'sub_title_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description 2</label>
                                        <input type="text" id="description_2" name="description_2" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'description_2')->first())->message ?? '' }}">
                                    </div>                                      
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 3</label>
                                        <input type="url" id="image_3" name="image_3" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'image_3')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 3</label>
                                        <input type="text" id="title_3" name="title_3" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'title_3')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title 3</label>
                                        <input type="text" id="sub_title_3" name="sub_title_3" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'sub_title_3')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description 3</label>
                                        <input type="text" id="description_3" name="description_3" required class="form-control" value="{{  optional($howItWorksSteps->where('type', 'description_3')->first())->message ?? '' }}">
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