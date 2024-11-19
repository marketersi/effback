@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Business Analysis Form</h1>
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
                                <form method="post" action="{{ route('analysis-card1.store')}}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Title</label>
                                            <input type="text" id="title" name="title" required class="form-control" value="{{  $details->where('type', 'title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Subtitle</label>
                                            <input type="text" id="subtitle" name="subtitle" required class="form-control" value="{{  $details->where('type', 'subtitle')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Main-Image</label>
                                            <input type="url" id="main_image" name="main_image" required class="form-control" value="{{  $details->where('type', 'main_image')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="Points">Points Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-1</label>
                                            <input type="text" id="left_points_1" name="left_points_1" required class="form-control" value="{{  $details->where('type', 'left_points_1')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-2</label>
                                            <input type="text" id="left_points_2" name="left_points_2" required class="form-control" value="{{  $details->where('type', 'left_points_2')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-3</label>
                                            <input type="text" id="left_points_3" name="left_points_3" required class="form-control" value="{{  $details->where('type', 'left_points_3')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-4</label>
                                            <input type="text" id="right_points_1" name="right_points_1" required class="form-control" value="{{  $details->where('type', 'right_points_1')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-5</label>
                                            <input type="text" id="right_points_2" name="right_points_2" required class="form-control" value="{{  $details->where('type', 'right_points_2')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-6</label>
                                            <input type="text" id="right_points_3" name="right_points_3" required class="form-control" value="{{  $details->where('type', 'right_points_3')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Button Section Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Button-Text</label>
                                            <input type="text" id="button_text" name="button_text" required class="form-control" value="{{  $details->where('type', 'button_text')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-1</label>
                                            <textarea type="text" id="description_1" name="description_1" required class="form-control">{{  $details->where('type', 'description_1')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Description-2</label>
                                            <textarea type="text" id="description_2" name="description_2" required class="form-control">{{  $details->where('type', 'description_2')->first()->message ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Image</label>
                                            <input type="url" id="image" name="image" required class="form-control" value="{{  $details->where('type', 'image')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Button Section Point Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-1</label>
                                            <input type="text" id="button_points_1" name="button_points_1" required class="form-control" value="{{  $details->where('type', 'button_points_1')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-2</label>
                                            <input type="text" id="button_points_2" name="button_points_2" required class="form-control" value="{{  $details->where('type', 'button_points_2')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Point-3</label>
                                            <input type="text" id="button_points_3" name="button_points_3" required class="form-control" value="{{  $details->where('type', 'button_points_3')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Card-1 Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-1 Title</label>
                                            <input type="text" id="card_1_title" name="card_1_title" required class="form-control" value="{{  $details->where('type', 'card_1_title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-1 Subtitle</label>
                                            <input type="text" id="card_1_subtitle" name="card_1_subtitle" required class="form-control" value="{{  $details->where('type', 'card_1_subtitle')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Card-2 Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-2 Title</label>
                                            <input type="text" id="card_2_title" name="card_2_title" required class="form-control" value="{{  $details->where('type', 'card_2_title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-2 Subtitle</label>
                                            <input type="text" id="card_2_subtitle" name="card_2_subtitle" required class="form-control" value="{{  $details->where('type', 'card_2_subtitle')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Card-3 Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-3 Title</label>
                                            <input type="text" id="card_3_title" name="card_3_title" required class="form-control" value="{{  $details->where('type', 'card_3_title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-3 Subtitle</label>
                                            <input type="text" id="card_3_subtitle" name="card_3_subtitle" required class="form-control" value="{{  $details->where('type', 'card_3_subtitle')->first()->message ?? '' }}">
                                        </div>
                                    </div>

                                    <label for="ButtonSection">Card-4 Form -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-4 Title</label>
                                            <input type="text" id="card_4_title" name="card_4_title" required class="form-control" value="{{  $details->where('type', 'card_4_title')->first()->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Card-4 Subtitle</label>
                                            <input type="text" id="card_4_subtitle" name="card_4_subtitle" required class="form-control" value="{{  $details->where('type', 'card_4_subtitle')->first()->message ?? '' }}">
                                        </div>
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