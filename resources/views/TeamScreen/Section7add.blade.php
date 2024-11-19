@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Section 7 </h1>
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
                        
                                <form method="post" action="{{ route('team.section7.store') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Card Title</label>
                                        <input type="text" id="card_title_7" name="card_title_7" required class="form-control" value ="{{  optional($details->where('type', 'card_title_7')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Card Image</label>
                                        <input type="url" id="card7_image_1" name="card7_image_1" required class="form-control" value ="{{  optional($details->where('type', 'card7_image_1')->first())->message ?? '' }}" >
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Card Image 2</label>
                                        <input type="url" id="card7_image_2" name="card7_image_2" required class="form-control" value ="{{  optional($details->where('type', 'card7_image_2')->first())->message ?? '' }}"> 
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Subtitle-1</label>
                                        <input type="text" id="subtitle_1" name="subtitle_1" required class="form-control" value ="{{  optional($details->where('type', 'subtitle_1')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Subtitle-2</label>
                                        <input type="text" id="subtitle_2" name="subtitle_2" required class="form-control" value ="{{  optional($details->where('type', 'subtitle_2')->first())->message ?? '' }}" >
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 1</label>
                                        <textarea id="paragraph_1" name="paragraph_1" required class="form-control">{{  optional($details->where('type', 'paragraph_1')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 2</label>
                                        <textarea id="paragraph_2" name="paragraph_2" required class="form-control">{{  optional($details->where('type', 'paragraph_2')->first())->message ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Paragraph 3</label>
                                        <textarea id="paragraph_3" name="paragraph_3" required class="form-control">{{  optional($details->where('type', 'paragraph_3')->first())->message ?? '' }}</textarea>
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