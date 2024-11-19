@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Team Screen Section 1 </h1>
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
                        
                                <form method="post" action="{{ route('team.section1.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                   
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
                                        <textarea  id="section_one_para_one" name="section_one_para_one" required class="form-control">{{  optional($details->where('type', 'section_one_para_one')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <textarea  id="section_one_para_two" name="section_one_para_two" required class="form-control"> {{  optional($details->where('type', 'section_one_para_two')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Section 1 Image</label>
                                        <input type="url" id="section_one_img" name="section_one_img" required class="form-control" value="{{  optional($details->where('type', 'section_one_img')->first())->message ?? '' }}">
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