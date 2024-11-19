@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Teams Section  </h1>
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
                        
                                <form method="post" action="{{ route('opinieteams.stored')}}" class="needs-validation" enctype="multipart/form-data" novalidate>
 
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
                                        <input type="url" id="img_one" name="img_one" required class="form-control" value ="{{  optional($details->where('type', 'img_one')->first())->message ?? '' }}"> 
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image url 2</label>
                                        <input type="url" id="img_two" name="img_two" required class="form-control" value ="{{  optional($details->where('type', 'img_two')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">image url 3</label>
                                        <input type="url" id="img_three" name="img_three" required class="form-control" value ="{{  optional($details->where('type', 'img_three')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">image url 4</label>
                                        <input type="url" id="img_four" name="img_four" required class="form-control" value ="{{  optional($details->where('type', 'img_four')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <textarea id="para_one" name="para_one" required class="form-control" > {{  optional($details->where('type', 'para_one')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <textarea id="para_two" name="para_two" required class="form-control" > {{  optional($details->where('type', 'para_two')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 3</label>
                                        <textarea id="para_three" name="para_three" required class="form-control" > {{  optional($details->where('type', 'para_three')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 4</label>
                                        <textarea id="para_four" name="para_four" required class="form-control" > {{  optional($details->where('type', 'para_four')->first())->message ?? '' }}</textarea>
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