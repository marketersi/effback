@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>PDF Form</h1>
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
                                <form method="post" action="{{ route('pdf.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Normal Text</label>
                                                <input type="text" id="normalText" name="normalText" required class="form-control" placeholder="Enter Normal Text" value="{{  optional($pdfDetails->where('type', 'normalText')->first())->message ?? '' }}">
                                                @error('normalText')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image</label>
                                                <input type="url" id="image" name="image" required class="form-control" placeholder="Enter Image" value="{{  optional($pdfDetails->where('type', 'image')->first())->message ?? '' }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Title</label>
                                                <input type="text" id="imageTitle" name="imageTitle" required class="form-control" placeholder="Enter Image Title" value="{{  optional($pdfDetails->where('type', 'imageTitle')->first())->message ?? '' }}">
                                                @error('imageTitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Subtitle</label>
                                                <input type="text" id="imageSubtitle" name="imageSubtitle" required class="form-control" placeholder="Enter Image Subtitle" value="{{  optional($pdfDetails->where('type', 'imageSubtitle')->first())->message ?? '' }}">
                                                @error('imageSubtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Link Text</label>
                                                <input type="text" id="imageLinkText" name="imageLinkText" required class="form-control" placeholder="Enter Image Link Text" value="{{  optional($pdfDetails->where('type', 'imageLinkText')->first())->message ?? '' }}">
                                                @error('imageLinkText')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Link</label>
                                                <input type="url" id="imageLink" name="imageLink" required class="form-control" placeholder="Image Link" value="{{  optional($pdfDetails->where('type', 'imageLink')->first())->message ?? '' }}">
                                                @error('imageLink')
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