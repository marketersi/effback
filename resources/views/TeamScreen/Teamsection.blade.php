@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Team Screen </h1>
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
                        
                                <form method="post" action="{{ route('teamsection.add') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Main Title</label>
                                        <input type="text" id="main_title" name="main_title" required class="form-control" value ="{{  optional($details->where('type', 'main_title')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" required class="form-control" value ="{{  optional($details->where('type', 'sub_title')->first())->message ?? '' }}" >
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Image</label>
                                        <input type="url" id="right_image" name="right_image" required class="form-control" value ="{{  optional($details->where('type', 'right_image')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Image</label>
                                        <input type="url" id="left_image" name="left_image" required class="form-control" value ="{{  optional($details->where('type', 'left_image')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Background Video</label>
                                        <input type="url" id="background_video" name="background_video" required class="form-control" value ="{{  optional($details->where('type', 'background_video')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title 2</label>
                                        <input type="text" id="title_2" name="title_2" required class="form-control" value ="{{  optional($details->where('type', 'title_2')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <input type="text" id="para_one" name="para_one" required class="form-control" value ="{{  optional($details->where('type', 'para_one')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <input type="text" id="para_two" name="para_two" required class="form-control"  value ="{{  optional($details->where('type', 'para_two')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 3</label>
                                        <input type="text" id="para_three" name="para_three" required class="form-control"  value ="{{  optional($details->where('type', 'para_three')->first())->message ?? '' }}">
                                    </div>
                            
                                    <div class="col-md-12 col-sm-12" >
                                        <h3 class="card-title"><h5><b>Fill Sections 1</b></h5>
                                    </div>


                              
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="section_title_one" name="section_title_one" required class="form-control" value = "{{  optional($details->where('type', 'section_title_one')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="section_subtitle_one" name="section_subtitle_one" required class="form-control" value ="{{  optional($details->where('type', 'section_subtitle_one')->first())->message ?? '' }}" >
                                    </div>
                                    

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <input type="text" id="section_one_para_one" name="section_one_para_one" required class="form-control"  value ="{{  optional($details->where('type', 'section_one_para_one')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <input type="text" id="section_one_para_two" name="section_one_para_two" required class="form-control" value="{{  optional($details->where('type', 'section_one_para_two')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Section 1 Image</label>
                                        <input type="url" id="section_one_img" name="section_one_img" required class="form-control" value="{{  optional($details->where('type', 'section_one_img')->first())->message ?? '' }}">
                                    </div>


                                    <div class="col-md-12 col-sm-12" >
                                        <h3 class="card-title"><h5><b>Fill Sections 2</b></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="section_two_title" name="section_two_title" required class="form-control" value ="{{  optional($details->where('type', 'section_two_title')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="section_two_subtitle" name="section_two_subtitle" required class="form-control" value ="{{  optional($details->where('type', 'section_two_subtitle')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image</label>
                                        <input type="url" id="section_two_image" name="section_two_image" required class="form-control" value ="{{  optional($details->where('type', 'section_two_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph</label>
                                        <input type="text" id="section_two_para" name="section_two_para" required class="form-control" value ="{{  optional($details->where('type', 'section_two_para')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Animated Small Image</label>
                                        <input type="url" id="animated_small_image" name="animated_small_image" required class="form-control" value ="{{  optional($details->where('type', 'animated_small_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title Discription</label>
                                        <input type="text" id="sub_title_discription" name="sub_title_discription" required class="form-control" value ="{{  optional($details->where('type', 'sub_title_discription')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-12 col-sm-12" >
                                        <h3 class="card-title"><h5><b>Fill Sections 3</b></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Headeer</label>
                                        <input type="text" id="section_three_header" name="section_three_header" required class="form-control" value ="{{  optional($details->where('type', 'section_three_header')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">SUb Headeer</label>
                                        <input type="text" id="section_three_subheader" name="section_three_subheader" required class="form-control" value ="{{  optional($details->where('type', 'section_three_subheader')->first())->message ?? '' }}">
                                    </div>


                                    <div class="col-md-12 col-sm-12" >
                                        <h3 class="card-title"><h5><b>Fill Sections 4</b></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">paragraph</label>
                                        <input type="text" id="section_four_para" name="section_four_para" required class="form-control" value ="{{  optional($details->where('type', 'section_four_para')->first())->message ?? '' }}">
                                    </div>

                                    <div class="col-md-12 col-sm-12" >
                                        <h3 class="card-title"><h5><b>Fill Sections 5</b></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="section_five_title" name="section_five_title" required class="form-control" value ="{{  optional($details->where('type', 'section_five_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 1</label>
                                        <input type="url" id="section_five_imgone" name="section_five_imgone" required class="form-control" value ="{{  optional($details->where('type', 'section_five_imgone')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image 2</label>
                                        <input type="url" id="section_five_imgtwo" name="section_five_imgtwo" required class="form-control" value ="{{  optional($details->where('type', 'section_five_imgtwo')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Background Image</label>
                                        <input type="url" id="section_five_bgimage" name="section_five_bgimage" required class="form-control" value ="{{  optional($details->where('type', 'section_five_bgimage')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph</label>
                                        <input type="text" id="section_five_para" name="section_five_para" required class="form-control" value ="{{  optional($details->where('type', 'section_five_para')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Buttom Paragraph</label>
                                        <input type="text" id="section_five_paratwo" name="section_five_paratwo" required class="form-control" value ="{{  optional($details->where('type', 'section_five_paratwo')->first())->message ?? '' }}">
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