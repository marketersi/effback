@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>UX Setting Systematically Section </h1>
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
                        
                                <form method="post" action="{{ route('UXsystematically.add') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title </label>
                                        <input type="text" id="systitle" name="systitle" required class="form-control" value ="{{  optional($details->where('type', 'systitle')->first())->message ?? '' }}" >
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Animated Text</label>
                                        <input type="text" id="Sys_AnimatedText" name="Sys_AnimatedText" required class="form-control" value ="{{  optional($details->where('type', 'Sys_AnimatedText')->first())->message ?? '' }}"> 
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image Spring</label>
                                        <input type="url" id="Sys_img_spring" name="Sys_img_spring" required class="form-control" value ="{{  optional($details->where('type', 'Sys_img_spring')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Dot Image1</label>
                                        <input type="text" id="Sys_dotimg1" name="Sys_dotimg1" required class="form-control" value ="{{  optional($details->where('type', 'Sys_dotimg1')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Dot Image2</label>
                                        <input type="text" id="Sys_dotimg2" name="Sys_dotimg2" required class="form-control" value ="{{  optional($details->where('type', 'Sys_dotimg2')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Dot Image3</label>
                                        <input type="text" id="Sys_dotimg3" name="Sys_dotimg3" required class="form-control" value ="{{  optional($details->where('type', 'Sys_dotimg3')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Dot Image3</label>
                                        <input type="text" id="Sys_dotimg4" name="Sys_dotimg4" required class="form-control" value ="{{  optional($details->where('type', 'Sys_dotimg4')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Button Text</label>
                                        <input type="text" id="Sys_buttontext" name="Sys_buttontext" required class="form-control" value ="{{  optional($details->where('type', 'Sys_buttontext')->first())->message ?? '' }}"> 
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Discription 1</label>
                                        <textarea id="Sys_dis1" name="Sys_dis1" required class="form-control"> {{  optional($details->where('type', 'Sys_dis1')->first())->message ?? '' }} </textarea> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Discription 2</label>
                                        <textarea  id="Sys_dis2" name="Sys_dis2" required class="form-control">{{  optional($details->where('type', 'Sys_dis2')->first())->message ?? '' }} </textarea> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Discription 3</label>
                                        <textarea  id="Sys_dis3" name="Sys_dis3" required class="form-control" > {{  optional($details->where('type', 'Sys_dis3')->first())->message ?? '' }} </textarea> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Discription 4</label>
                                        <textarea  id="Sys_dis4" name="Sys_dis4" required class="form-control"> {{  optional($details->where('type', 'Sys_dis4')->first())->message ?? '' }} </textarea>
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