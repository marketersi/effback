@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Image Advantage Form</h1>
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
                                <form method="post" action="{{ route('image-advantage.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  $details->where('type', 'title')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description-1</label>
                                        <textarea type="text" id="description" name="description" required class="form-control">{{  $details->where('type', 'description')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Info-1</label>
                                        <input type="text" id="left_info_1" name="left_info_1" required class="form-control" value="{{  $details->where('type', 'left_info_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Info-2</label>
                                        <input type="text" id="left_info_2" name="left_info_2" required class="form-control" value="{{  $details->where('type', 'left_info_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Info-3</label>
                                        <input type="text" id="left_info_3" name="left_info_3" required class="form-control" value="{{  $details->where('type', 'left_info_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Info-4</label>
                                        <input type="text" id="left_info_4" name="left_info_4" required class="form-control" value="{{  $details->where('type', 'left_info_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Left Info-5</label>
                                        <input type="text" id="left_info_5" name="left_info_5" required class="form-control" value="{{  $details->where('type', 'left_info_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Info-1</label>
                                        <input type="text" id="right_info_1" name="right_info_1" required class="form-control" value="{{  $details->where('type', 'right_info_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Info-2</label>
                                        <input type="text" id="right_info_2" name="right_info_2" required class="form-control" value="{{  $details->where('type', 'right_info_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Info-3</label>
                                        <input type="text" id="right_info_3" name="right_info_3" required class="form-control" value="{{  $details->where('type', 'right_info_3')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Info-4</label>
                                        <input type="text" id="right_info_4" name="right_info_4" required class="form-control" value="{{  $details->where('type', 'right_info_4')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Right Info-5</label>
                                        <input type="text" id="right_info_5" name="right_info_5" required class="form-control" value="{{  $details->where('type', 'right_info_5')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Button-Text</label>
                                        <input type="text" id="button_text" name="button_text" required class="form-control" value="{{  $details->where('type', 'button_text')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <textarea type="text" id="paragraph_1" name="paragraph_1" required class="form-control">{{  $details->where('type', 'paragraph_1')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">paragraph 2</label>
                                        <textarea type="text" id="paragraph_2" name="paragraph_2" required class="form-control">{{  $details->where('type', 'paragraph_2')->first()->message ?? '' }}</textarea>
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