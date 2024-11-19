@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Calculator Form</h1>
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
                                <form method="post" action="{{ route('calculator.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <div class="card-body">
                                       
                                        <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">First Heading</label>
                                        <input type="text" id="first_heading" name="first_heading" required class="form-control" value="{{  optional($details->where('type', 'first_heading')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Heading</label>
                                        <input type="text" id="sub_heading" name="sub_heading" required class="form-control" value="{{  optional($details->where('type', 'sub_heading')->first())->message ?? '' }}">
                                    </div>
                                
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Second Heading</label>
                                        <input type="text" id="second_heading" name="second_heading" required class="form-control" value="{{  optional($details->where('type', 'second_heading')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">First Paragraph</label>
                                        <textarea id="first_paragraph" name="first_paragraph" required cols="5" class="form-control">{{ optional($details->where('type', 'first_paragraph')->first())->message ?? '' }}</textarea>

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Second Paragraph</label>
                                        <textarea id="second_paragraph" name="second_paragraph" required cols="5" class="form-control">{{ optional($details->where('type', 'second_paragraph')->first())->message ?? '' }}</textarea>
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