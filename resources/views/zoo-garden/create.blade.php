@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Zoo Garden Form</h1>
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
                                <form method="post" action="{{ route('zoo.garden.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Title" value="{{  optional($zooDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Subtitle</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" placeholder="Enter Subtitle" value="{{  optional($zooDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-1</label>
                                                <input type="text" id="text1" name="text1" required class="form-control" placeholder="Enter Text-1" value="{{  optional($zooDetails->where('type', 'text1')->first())->message ?? '' }}">
                                                @error('text1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-2</label>
                                                <input type="text" id="text2" name="text2" required class="form-control" placeholder="Enter Text-2" value="{{  optional($zooDetails->where('type', 'text')->first())->message ?? '' }}">
                                                @error('text2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image-1</label>
                                                <input type="url" id="image_1" name="image_1" required class="form-control" placeholder="Enter Image URL" value="{{  optional($zooDetails->where('type', 'image_1')->first())->message ?? '' }}">
                                                @error('image_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-3</label>
                                                <input type="text" id="text3" name="text3" required class="form-control" placeholder="Enter Text-3" value="{{  optional($zooDetails->where('type', 'text3')->first())->message ?? '' }}">
                                                @error('text3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-4</label>
                                                <input type="text" id="text4" name="text4" required class="form-control" placeholder="Enter Text-4" value="{{  optional($zooDetails->where('type', 'text4')->first())->message ?? '' }}">
                                                @error('text4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image-2</label>
                                                <input type="url" id="image_2" name="image_2" required class="form-control" placeholder="Enter Image URL" value="{{  optional($zooDetails->where('type', 'image_2')->first())->message ?? '' }}">
                                                @error('image_2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-5</label>
                                                <input type="text" id="text5" name="text5" required class="form-control" placeholder="Enter Text-5" value="{{  optional($zooDetails->where('type', 'text5')->first())->message ?? '' }}">
                                                @error('text5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-6</label>
                                                <input type="text" id="text6" name="text6" required class="form-control" placeholder="Enter Text-6" value="{{  optional($zooDetails->where('type', 'text6')->first())->message ?? '' }}">
                                                @error('text6')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-7</label>
                                                <input type="text" id="text7" name="text7" required class="form-control" placeholder="Enter Text-7" value="{{  optional($zooDetails->where('type', 'text7')->first())->message ?? '' }}">
                                                @error('text7')
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