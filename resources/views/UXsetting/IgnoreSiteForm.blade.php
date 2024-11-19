@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>UX Setting IgnoreSite  </h1>
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
                        
                                <form method="post" action="{{ route('UXignoreSites.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image</label>
                                        <input type="url" id="image" name="image" required class="form-control" value ="{{  optional($details->where('type', 'image')->first())->message ?? '' }}" >
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value ="{{  optional($details->where('type', 'title')->first())->message ?? '' }}"> 
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description 1</label>
                                        <textarea  id="descript1" name="descript1" required class="form-control">{{  optional($details->where('type', 'descript1')->first())->message ?? '' }} </textarea> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description 2</label>
                                        <textarea input id="descript2" name="descript2" required class="form-control" >{{  optional($details->where('type', 'descript2')->first())->message ?? '' }}</textarea> 
                                    </div>
                                
                                 </div>

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