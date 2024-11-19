@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Project Value Form</h1>
                        </div>
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
                                <form method="post" action="{{ route('project.value.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" value="{{  optional($projectDetails->where('type', 'title')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Sub Title</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" value="{{  optional($projectDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image</label>
                                                <input type="url" id="image" name="image" required class="form-control" value="{{  optional($projectDetails->where('type', 'image')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Title</label>
                                                <input type="text" id="imageTitle" name="imageTitle" required class="form-control" value="{{  optional($projectDetails->where('type', 'imageTitle')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Sub Title</label>
                                                <input type="text" id="imageSubtitle" name="imageSubtitle" required class="form-control" value="{{  optional($projectDetails->where('type', 'imageSubtitle')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Gallery Title</label>
                                                <input type="text" id="galleryTitle" name="galleryTitle" required class="form-control" value="{{  optional($projectDetails->where('type', 'galleryTitle')->first())->message ?? '' }}">
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Gallery Image</label>
                                                <input type="url" id="galleryImage" name="galleryImage" required class="form-control" value="{{  optional($projectDetails->where('type', 'galleryImage')->first())->message ?? '' }}">
                                            </div>
                                        </div>                           <!-- /.card-body -->

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