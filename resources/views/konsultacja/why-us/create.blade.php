@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Why-Us Form</h1>
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
                                <form method="post" action="{{ route('whyus.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required class="form-control" value="{{  $details->where('type', 'title')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Subtitle</label>
                                        <input type="text" id="subtitle" name="subtitle" required class="form-control" value="{{  $details->where('type', 'subtitle')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph-1</label>
                                        <textarea type="text" id="paragraph_1" name="paragraph_1" required class="form-control" >{{  $details->where('type', 'paragraph_1')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph-2</label>
                                        <textarea type="text" id="paragraph_2" name="paragraph_2" required class="form-control">{{  $details->where('type', 'paragraph_2')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph-3</label>
                                        <textarea type="text" id="paragraph_3" name="paragraph_3" required class="form-control">{{  $details->where('type', 'paragraph_3')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph-4</label>
                                        <textarea type="text" id="paragraph_4" name="paragraph_4" required class="form-control">{{  $details->where('type', 'paragraph_4')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Image-URL 1</label>
                                        <input type="url" id="image_url_1" name="image_url_1" required class="form-control" value="{{  $details->where('type', 'image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Question-1</label>
                                        <textarea type="text" id="question_1" name="question_1" required class="form-control">{{  $details->where('type', 'question_1')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info-1</label>
                                        <textarea type="text" id="info_1" name="info_1" required class="form-control">{{  $details->where('type', 'info_1')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info Image-URL 1</label>
                                        <input type="url" id="info_image_url_1" name="info_image_url_1" required class="form-control" value="{{  $details->where('type', 'info_image_url_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Question-2</label>
                                        <textarea type="text" id="question_2" name="question_2" required class="form-control">{{  $details->where('type', 'question_2')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info-2</label>
                                        <textarea type="text" id="info_2" name="info_2" required class="form-control">{{  $details->where('type', 'info_2')->first()->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Info Image-URL 2</label>
                                        <input type="url" id="info_image_url_2" name="info_image_url_2" required class="form-control" value="{{  $details->where('type', 'info_image_url_2')->first()->message ?? '' }}">
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