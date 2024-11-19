@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Team Screen Section 2 </h1>
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
                        
                                <form method="post" action="{{ route('team.section2.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                   
                                
                                 
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
                                        <label class="control-label">Animated Small Image</label>
                                        <input type="url" id="animated_small_image" name="animated_small_image" required class="form-control" value ="{{  optional($details->where('type', 'animated_small_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph</label>
                                        <textarea id="section_two_para" name="section_two_para" required class="form-control">{{ optional($details->where('type', 'section_two_para')->first())->message ?? '' }}</textarea>
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title Discription</label>
                                        <textarea  id="sub_title_discription" name="sub_title_discription" required class="form-control">{{  optional($details->where('type', 'sub_title_discription')->first())->message ?? '' }}"</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title-2</label>
                                        <input type="text" id="section_two_title_2" name="section_two_title_2" required class="form-control" value ="{{  optional($details->where('type', 'section_two_title_2')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description-2</label>
                                        <textarea  id="description" name="description" required class="form-control">{{  optional($details->where('type', 'description')->first())->message ?? '' }}</textarea>
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