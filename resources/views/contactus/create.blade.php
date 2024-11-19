@include('auth.layouts.app')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Us Form</h1>
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
                        <form method="post" action="{{ route('contact.store') }}" class="needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="card-body">
                                <!-- <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div> -->

                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Main Title</label>
                                        <input type="text" id="main_title" name="main_title" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'main_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" id="sub_title" name="sub_title" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'sub_title')->first())->message ?? '' }}">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">First Image</label>
                                        <input type="text" id="first_image" name="first_image" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'first_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Second Image</label>
                                        <input type="text" id="second_image" name="second_image" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'second_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Third Image</label>
                                        <input type="text" id="third_image" name="third_image" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'third_image')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Fourth Image</label>
                                        <input type="text" id="fourth_image" name="fourth_image" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'fourth_image')->first())->message ?? '' }}">
                                    </div>


                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Manual</label>
                                        <input type="text" id="manual" name="manual" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'manual')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Bellow to manual</label>
                                        <input type="text" id="bellow_to_manual" name="bellow_to_manual" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'bellow_to_manual')->first())->message ?? '' }}">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Social Media Content</label>
                                        <input type="text" id="social_media_content" name="social_media_content"
                                            required class="form-control"
                                            value="{{ optional($details->where('type', 'social_media_content')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Social Media Title</label>
                                        <input type="text" id="social_media_title" name="social_media_title"
                                            required class="form-control"
                                            value="{{ optional($details->where('type', 'social_media_title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">VAT ID</label>
                                        <input type="text" id="vat_id" name="vat_id" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'vat_id')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Kawka</label>
                                        <input type="text" id="kawka" name="kawka" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'kawka')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Regon</label>
                                        <input type="text" id="regon" name="regon" required
                                            class="form-control"
                                            value="{{ $details->where('type', 'regon')->first()->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">CO-Work</label>
                                        <input type="text" id="co_work" name="co_work" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'co_work')->first())->message ?? '' }}">
                                    </div>
                                </div>

                                <label for="Thanks" class="h5">Form Section -</label>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="title" name="title" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'title')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Number</label>
                                        <input type="text" id="number" name="number" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'number')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Mail</label>
                                        <input type="text" id="mail" name="mail" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'mail')->first())->message ?? '' }}">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Button Text</label>
                                        <input type="text" id="button_text" name="button_text" required
                                            class="form-control"
                                            value="{{ optional($details->where('type', 'button_text')->first())->message ?? '' }}">
                                    </div>

                                    <label for="Thanks" class="h5">Message Response Section -</label>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Message Response</label>
                                            <input type="text" id="message_response" name="message_response"
                                                required class="form-control"
                                                value="{{ optional($details->where('type', 'message_response')->first())->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Greeting Message</label>
                                            <input type="text" id="greeting_message" name="greeting_message"
                                                required class="form-control"
                                                value="{{ optional($details->where('type', 'greeting_message')->first())->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Link Prompt Text</label>
                                            <input type="text" id="link_prompt_text" name="link_prompt_text"
                                                required class="form-control"
                                                value="{{ optional($details->where('type', 'link_prompt_text')->first())->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Social Media Text</label>
                                            <input type="text" id="social_media_text" name="social_media_text"
                                                required class="form-control"
                                                value="{{ optional($details->where('type', 'social_media_text')->first())->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Display Picture</label>
                                            <input type="text" id="display_picture" name="display_picture"
                                                required class="form-control"
                                                value="{{ optional($details->where('type', 'display_picture')->first())->message ?? '' }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Email SVG</label>
                                            <input type="text" id="email_svg" name="email_svg" required
                                                class="form-control"
                                                value="{{ optional($details->where('type', 'email_svg')->first())->message ?? '' }}">
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
                    $(function() {
                        bsCustomFileInput.init();
                    });
                </script>
