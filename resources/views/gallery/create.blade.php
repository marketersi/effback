@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gallery Form</h1>
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
                                <form method="post" action="{{ route('gallery.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" value="{{  optional($galleryDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Sub Title</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" value="{{  optional($galleryDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('sub_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image</label>
                                                <input type="url" id="image" name="image" required class="form-control" value="{{  optional($galleryDetails->where('type', 'image')->first())->message ?? '' }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Button Text</label>
                                                <input type="text" id="buttonText" name="buttonText" required class="form-control" value="{{  optional($galleryDetails->where('type', 'buttonText')->first())->message ?? '' }}">
                                                @error('button_text')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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