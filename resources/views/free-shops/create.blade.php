@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Free Shops Form</h1>
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
                                <form method="post" action="{{ route('free.shops.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Title" value="{{  optional($shopsDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Subtitle</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" placeholder="Enter Subtitle" value="{{  optional($shopsDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Main Image Text-1</label>
                                                <input type="text" id="mainImageText1" name="mainImageText1" required class="form-control" placeholder="Enter Main Image Text-1" value="{{  optional($shopsDetails->where('type', 'mainImageText1')->first())->message ?? '' }}">
                                                @error('mainImageTex1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Main Image Text-2</label>
                                                <input type="text" id="mainImageText2" name="mainImageText2" required class="form-control" placeholder="Enter Main Image Text-2" value="{{  optional($shopsDetails->where('type', 'mainImageText2')->first())->message ?? '' }}">
                                                @error('mainImageText2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Main Image Text-3</label>
                                                <input type="text" id="mainImageText3" name="mainImageText3" required class="form-control" placeholder="Enter Main Image Text-3" value="{{  optional($shopsDetails->where('type', 'mainImageText3')->first())->message ?? '' }}">
                                                @error('mainImageText3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Main-Image</label>
                                                <input type="url" id="mainImage" name="mainImage" required class="form-control" placeholder="Enter Main Image URL" value="{{  optional($shopsDetails->where('type', 'mainImage')->first())->message ?? '' }}">
                                                @error('mainImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Text Above-1</label>
                                                <input type="text" id="bannerImageTextAbove1" name="bannerImageTextAbove1" required class="form-control" placeholder="Banner Image Text Above-1" value="{{  optional($shopsDetails->where('type', 'bannerImageTextAbove1')->first())->message ?? '' }}">
                                                @error('bannerImageTextAbove1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Text Above-2</label>
                                                <input type="text" id="bannerImageTextAbove2" name="bannerImageTextAbove2" required class="form-control" placeholder="Banner Image Text Above-2" value="{{  optional($shopsDetails->where('type', 'bannerImageTextAbove2')->first())->message ?? '' }}">
                                                @error('bannerImageTextAbove2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image</label>
                                                <input type="url" id="bannerimage" name="bannerimage" required class="form-control" placeholder="Banner Image" value="{{  optional($shopsDetails->where('type', 'bannerimage')->first())->message ?? '' }}">
                                                @error('bannerimage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Text Below-1</label>
                                                <input type="text" id="bannerImageTextBelow1" name="bannerImageTextBelow1" required class="form-control" placeholder="Banner Image Text Below-1" value="{{  optional($shopsDetails->where('type', 'bannerImageTextBelow1')->first())->message ?? '' }}">
                                                @error('bannerImageTextBelow1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Banner Image Text Below-2</label>
                                                <input type="text" id="bannerImageTextBelow2" name="bannerImageTextBelow2" required class="form-control" placeholder="Banner Image Text Below-2" value="{{  optional($shopsDetails->where('type', 'bannerImageTextBelow2')->first())->message ?? '' }}">
                                                @error('bannerImageTextBelow2')
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