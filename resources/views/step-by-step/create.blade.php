@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Step By Step Form</h1>
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
                                <form method="post" action="{{ route('step.by.step.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Title" value="{{  optional($stepDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Subtitle</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" placeholder="Enter Subtitle" value="{{  optional($stepDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image</label>
                                                <input type="url" id="image" name="image" required class="form-control" placeholder="Enter Image URL" value="{{  optional($stepDetails->where('type', 'image')->first())->message ?? '' }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Title</label>
                                                <input type="text" id="imageTitle" name="imageTitle" required class="form-control" placeholder="Enter Image Title" value="{{  optional($stepDetails->where('type', 'imageTitle')->first())->message ?? '' }}">
                                                @error('imageTitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image Subtitle</label>
                                                <input type="text" id="imageSubTitle" name="imageSubTitle" required class="form-control" placeholder="Enter Image Subtitle" value="{{  optional($stepDetails->where('type', 'imageSubTitle')->first())->message ?? '' }}">
                                                @error('imageSubTitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Secondary Image</label>
                                                <input type="url" id="secondaryImage" name="secondaryImage" required class="form-control" placeholder="Enter Secondary Image URL" value="{{  optional($stepDetails->where('type', 'secondaryImage')->first())->message ?? '' }}">
                                                @error('secondaryImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Secondary Image Title</label>
                                                <input type="text" id="secondaryImageTitle" name="secondaryImageTitle" required class="form-control" placeholder="Secondary Image Title" value="{{  optional($stepDetails->where('type', 'secondaryImageTitle')->first())->message ?? '' }}">
                                                @error('secondaryImageTitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Secondary Image Subtitle</label>
                                                <input type="text" id="secondaryImageSubtitle" name="secondaryImageSubtitle" required class="form-control" placeholder="Secondary Image Subtitle" value="{{  optional($stepDetails->where('type', 'secondaryImageSubtitle')->first())->message ?? '' }}">
                                                @error('secondaryImageSubtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Secondary Image Subtitle-2</label>
                                                <input type="text" id="secondaryImageSubtitle2" name="secondaryImageSubtitle2" required class="form-control" placeholder="Secondary Image Subtitle-2" value="{{  optional($stepDetails->where('type', 'secondaryImageSubtitle2')->first())->message ?? '' }}">
                                                @error('secondaryImageSubtitle2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image</label>
                                                <input type="url" id="bannerImage" name="bannerImage" required class="form-control" placeholder="Banner Image" value="{{  optional($stepDetails->where('type', 'secondaryImageSubtitle')->first())->message ?? '' }}">
                                                @error('bannerImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Title</label>
                                                <input type="text" id="bannerImageTitle" name="bannerImageTitle" required class="form-control" placeholder="Banner Image Title" value="{{  optional($stepDetails->where('type', 'bannerImageTitle')->first())->message ?? '' }}">
                                                @error('bannerImageTitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Subtitle</label>
                                                <input type="text" id="bannerImageSubtitle" name="bannerImageSubtitle" required class="form-control" placeholder="Banner Image Subtitle" value="{{  optional($stepDetails->where('type', 'bannerImageSubtitle')->first())->message ?? '' }}">
                                                @error('bannerImageSubtitle')
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