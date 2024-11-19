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
                                <form method="post" action="{{ route('buisnessTools-section.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'title')->first())->message ?? '' }}">
                                    </div>            
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 1</label>
                                        <input type="url" id="image_1" name="image_1" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'image_1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 1 Text</label>
                                        <input type="text" id="img_1_text" name="img_1_text" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'img_1_text')->first())->message ?? '' }}">
                                    </div>     
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 2</label>
                                        <input type="url" id="image_2" name="image_2" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'image_2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 2 Text</label>
                                        <input type="text" id="img_2_text" name="img_2_text" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'img_2_text')->first())->message ?? '' }}">
                                    </div>     
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 3</label>
                                        <input type="url" id="image_3" name="image_3" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'image_3')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 3 Text</label>
                                        <input type="text" id="img_3_text" name="img_3_text" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'img_3_text')->first())->message ?? '' }}">
                                    </div>     
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 4</label>
                                        <input type="url" id="image_4" name="image_4" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'image_4')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 4 Text</label>
                                        <input type="text" id="img_4_text" name="img_4_text" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'img_4_text')->first())->message ?? '' }}">
                                    </div>     
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 5</label>
                                        <input type="url" id="image_5" name="image_5" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'image_5')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 5 Text</label>
                                        <input type="text" id="img_5_text" name="img_5_text" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'img_5_text')->first())->message ?? '' }}">
                                    </div>    
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Para 1</label>
                                        <input type="text" id="para_1" name="para_1" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'para_1')->first())->message ?? '' }}">
                                    </div>    
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Para 2</label>
                                        <input type="text" id="para_2" name="para_2" required class="form-control" value="{{  optional($buisnessToolsSection->where('type', 'para_2')->first())->message ?? '' }}">
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