@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>At Owonce Section </h1>
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
                        
                                <form method="post" action="{{ route('personally.stored') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
 
                                  @csrf
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title </label>
                                        <input type="text" id="title" name="title" required class="form-control" value ="{{  optional($details->where('type', 'title')->first())->message ?? '' }}" >
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image url 1</label>
                                        <input type="url" id="img_1" name="img_1" required class="form-control" value ="{{  optional($details->where('type', 'img_1')->first())->message ?? '' }}"> 
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image url 2</label>
                                        <input type="url" id="img_2" name="img_2" required class="form-control" value ="{{  optional($details->where('type', 'img_2')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Contact Name</label>
                                        <input type="text" id="cont_name" name="cont_name" required class="form-control" value ="{{  optional($details->where('type', 'cont_name')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Contact Location</label>
                                        <input type="text" id="cont_location" name="cont_location" required class="form-control" value ="{{  optional($details->where('type', 'cont_location')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Contact Number</label>
                                        <input type="text" id="cont_number" name="cont_number" required class="form-control" value ="{{  optional($details->where('type', 'cont_number')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <textarea id="para_1" name="para_1" required class="form-control" > {{  optional($details->where('type', 'para_1')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <textarea id="para_2" name="para_2" required class="form-control" > {{  optional($details->where('type', 'para_2')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 3</label>
                                        <textarea id="para_3" name="para_3" required class="form-control" > {{  optional($details->where('type', 'para_3')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <label class="col-12 h4 mt-2">Write To Us:</label>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Text</label>
                                        <textarea id="text" name="text" required class="form-control" > {{  optional($details->where('type', 'text')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Email</label>
                                        <input type="email" id="email" name="email" required class="form-control" value ="{{  optional($details->where('type', 'email')->first())->message ?? '' }}"> 
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