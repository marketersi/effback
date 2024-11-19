@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Section 6 Card 1 </h1>
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
                        
                                <form method="post" action="{{ route('team.section6c1.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="card1_title" name="card1_title" required class="form-control" value ="{{  optional($details->where('type', 'card1_title')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Text</label>
                                        <textarea id="card1_text" name="card1_text" required class="form-control" >{{  optional($details->where('type', 'card1_text')->first())->message ?? '' }} </textarea>
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image</label>
                                        <input type="url" id="card1_img" name="card1_img" required class="form-control" value ="{{  optional($details->where('type', 'card1_img')->first())->message ?? '' }}"> 
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