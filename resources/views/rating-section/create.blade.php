@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Rating Form</h1>
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
                                <form method="post" action="{{ route('rating.section.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                    <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Label</label>
                                        <input type="text" id="label" name="label" required class="form-control" value="{{  $details->where('type', 'label')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Image 1</label>
                                        <input type="text" id="brand_image_1" name="brand_image_1" required class="form-control" value="{{  $details->where('type', 'brand_image_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Brand Image 2</label>
                                        <input type="text" id="barnd_image_2" name="barnd_image_2" required class="form-control" value="{{  $details->where('type', 'barnd_image_2')->first()->message ?? '' }}">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Rating Text</label>
                                        <input type="text" id="rating_text" name="rating_text" required class="form-control" value="{{  $details->where('type', 'rating_text')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Rating</label>
                                        <input type="text" id="rating" name="rating" required class="form-control" value="{{  $details->where('type', 'rating')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Review</label>
                                        <input type="text" id="review" name="review" required class="form-control" value="{{  $details->where('type', 'review')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Name</label>
                                        <input type="text" id="name" name="name" required class="form-control" value="{{  $details->where('type', 'name')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Designation</label>
                                        <input type="text" id="designation" name="designation" required class="form-control" value="{{  $details->where('type', 'designation')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Company</label>
                                        <input type="text" id="company" name="company" required class="form-control" value="{{  $details->where('type', 'company')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Rating Image 1</label>
                                        <input type="text" id="rating_image_1" name="rating_image_1" required class="form-control" value="{{  $details->where('type', 'rating_image_1')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Rating Image 2</label>
                                        <input type="text" id="rating_image_2" name="rating_image_2" required class="form-control" value="{{  $details->where('type', 'rating_image_2')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Question</label>
                                        <input type="text" id="question" name="question" required class="form-control" value="{{  $details->where('type', 'question')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Answer</label>
                                        <input type="text" id="answer" name="answer" required class="form-control" value="{{  $details->where('type', 'answer')->first()->message ?? '' }}">
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