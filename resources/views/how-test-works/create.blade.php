@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>How Test Works</h1>
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
                                <form method="post" action="{{ route('howtestworks.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                       
                                        <div class="form-group row">
                                    <div class="col-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  optional($testdetails->where('type', 'title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <input type="text" id="para1" name="para1" required class="form-control" value="{{  optional($testdetails->where('type', 'para1')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <input type="text" id="para2" name="para2" required class="form-control" value="{{  optional($testdetails->where('type', 'para2')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 3</label>
                                        <input type="text" id="para3" name="para3" required class="form-control" value="{{  optional($testdetails->where('type', 'para3')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 4</label>
                                        <input type="text" id="para4" name="para4" required class="form-control" value="{{  optional($testdetails->where('type', 'para4')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 5</label>
                                        <input type="text" id="para5" name="para5" required class="form-control" value="{{  optional($testdetails->where('type', 'para5')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label">Paragraph 6</label>
                                        <input type="text" id="para6" name="para6" required class="form-control" value="{{  optional($testdetails->where('type', 'para6')->first())->message ?? '' }}">
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