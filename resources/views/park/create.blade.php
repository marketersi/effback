@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Park Form</h1>
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
                                <form method="post" action="{{ route('park.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Title" value="{{  optional($parkDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Subtitle</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" placeholder="Enter Subtitle" value="{{  optional($parkDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Logo Image</label>
                                                <input type="url" id="logoImage" name="logoImage" required class="form-control" placeholder="Enter Logo Image URL" value="{{  optional($parkDetails->where('type', 'logoImage')->first())->message ?? '' }}">
                                                @error('logoImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image</label>
                                                <input type="url" id="bannerImage" name="bannerImage" required class="form-control" placeholder="Enter Banner Image URL" value="{{  optional($parkDetails->where('type', 'bannerImage')->first())->message ?? '' }}">
                                                @error('bannerImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text</label>
                                                <input type="text" id="text" name="text" required class="form-control" placeholder="Enter Text" value="{{  optional($parkDetails->where('type', 'text')->first())->message ?? '' }}">
                                                @error('text')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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