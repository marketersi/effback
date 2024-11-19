@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>What Receive Form</h1>
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
                                <form method="post" action="{{ route('what-receive.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">

                                    <label for="Top">Upper Section Content -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Title</label>
                                            <input type="text" id="title" name="title" required class="form-control" value="{{  $details->where('type', 'title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-1</label>
                                            <textarea type="text" id="description_1" name="description_1" required class="form-control">{{  $details->where('type', 'description_1')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Subtitle</label>
                                            <input type="text" id="subtitle" name="subtitle" required class="form-control" value="{{  $details->where('type', 'subtitle')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Description-2</label>
                                        <textarea type="text" id="description_2" name="description_2" required class="form-control">{{  $details->where('type', 'description_2')->first()->message ?? '' }}</textarea>
                                        </div>
                                    </div>

                                    <label for="Mid">Mid Section Content -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-1</label>
                                            <input type="text" id="info_1" name="info_1" required class="form-control" value="{{  $details->where('type', 'info_1')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-2</label>
                                            <input type="text" id="info_2" name="info_2" required class="form-control" value="{{  $details->where('type', 'info_2')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-3</label>
                                            <input type="text" id="info_3" name="info_3" required class="form-control" value="{{  $details->where('type', 'info_3')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-4</label>
                                            <input type="text" id="info_4" name="info_4" required class="form-control" value="{{  $details->where('type', 'info_4')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-5</label>
                                            <input type="text" id="info_5" name="info_5" required class="form-control" value="{{  $details->where('type', 'info_5')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Info-6</label>
                                            <input type="text" id="info_6" name="info_6" required class="form-control" value="{{  $details->where('type', 'info_6')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Image-URl 1</label>
                                                <input type="url" id="image_url_1" name="image_url_1" required class="form-control" value="{{  $details->where('type', 'image_url_1')->first()->message ?? '' }}">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Sub-Info</label>
                                                <input type="text" id="sub_info" name="sub_info" required class="form-control" value="{{  $details->where('type', 'sub_info')->first()->message ?? '' }}">
                                            </div>
                                    </div>

                                    <label for="Bottom">Bottom Section Content -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-1</label>
                                            <textarea type="text" id="description_3" name="description_3" required class="form-control">{{  $details->where('type', 'description_3')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-2</label>
                                            <textarea type="text" id="description_4" name="description_4" required class="form-control">{{  $details->where('type', 'description_4')->first()->message ?? '' }}</textarea>
                                        </div>
                                    </div>

                                    <label for="Button's">Button's Content -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Button-Text</label>
                                            <input type="text" id="button_text" name="button_text" required class="form-control" value="{{  $details->where('type', 'button_text')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-1</label>
                                            <textarea type="text" id="description_5" name="description_5" required class="form-control">{{  $details->where('type', 'description_5')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-2</label>
                                            <textarea type="text" id="description_6" name="description_6" required class="form-control">{{  $details->where('type', 'description_6')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-3</label>
                                            <textarea type="text" id="description_7" name="description_7" required class="form-control">{{  $details->where('type', 'description_7')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-4</label>
                                            <textarea type="text" id="description_8" name="description_8" required class="form-control">{{  $details->where('type', 'description_8')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-5</label>
                                            <textarea type="text" id="description_9" name="description_9" required class="form-control">{{  $details->where('type', 'description_9')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Image-URL 2</label>
                                            <input type="url" id="image_url_2" name="image_url_2" required class="form-control" value="{{  $details->where('type', 'image_url_2')->first()->message ?? '' }}">
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