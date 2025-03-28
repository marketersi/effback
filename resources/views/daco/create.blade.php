@include("auth.layouts.app")
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daco Form</h1>
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
                                <form method="post" action="{{ route('daco.store')}}" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Title" value="{{  optional($dacoDetails->where('type', 'title')->first())->message ?? '' }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Subtitle</label>
                                                <input type="text" id="subtitle" name="subtitle" required class="form-control" placeholder="Enter Subtitle" value="{{  optional($dacoDetails->where('type', 'subtitle')->first())->message ?? '' }}">
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Image</label>
                                                <input type="url" id="image" name="image" required class="form-control" placeholder="Enter Image URL" value="{{  optional($dacoDetails->where('type', 'image')->first())->message ?? '' }}">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-1</label>
                                                <input type="text" id="text1" name="text1" required class="form-control" placeholder="Enter Text-1" value="{{  optional($dacoDetails->where('type', 'text1')->first())->message ?? '' }}">
                                                @error('text1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-2</label>
                                                <input type="text" id="text2" name="text2" required class="form-control" placeholder="Enter Text-2" value="{{  optional($dacoDetails->where('type', 'text2')->first())->message ?? '' }}">
                                                @error('text2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Text-3</label>
                                                <input type="text" id="text3" name="text3" required class="form-control" placeholder="Enter Text-3" value="{{  optional($dacoDetails->where('type', 'text3')->first())->message ?? '' }}">
                                                @error('text3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Quote</label>
                                                <input type="text" id="quote" name="quote" required class="form-control" placeholder="Enter Quote" value="{{  optional($dacoDetails->where('type', 'quote')->first())->message ?? '' }}">
                                                @error('quote')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Quote Author</label>
                                                <input type="text" id="quoteAuthor" name="quoteAuthor" required class="form-control" placeholder="Enter Quote Author" value="{{  optional($dacoDetails->where('type', 'quoteAuthor')->first())->message ?? '' }}">
                                                @error('quoteAuthor')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>                     <!-- /.card-body -->
                                            <div class="col-12">
                                                <label class="control-label">Quote Text</label>
                                                <input type="text" id="quoteText" name="quoteText" required class="form-control" placeholder="Enter Quote Text" value="{{  optional($dacoDetails->where('type', 'quoteText')->first())->message ?? '' }}">
                                                @error('quoteText')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>                     <!-- /.card-body -->

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