@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Image</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="p-3">
                  <a href="javascript:void(0);" class="btn btn-success addfields float-right">
                      Add Url
                  </a>
                </div>
                <form id="quickForm" action="{{ route('image.group.update') }}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                  <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id">
                    @php
                        $imageUrls = json_decode($user->image, true);
                    @endphp

                    @foreach($imageUrls as $index => $imageUrl)
                        <div class="row">
                            <div class="col form-group">
                                <label for="title">Image {{$index + 1}}</label>
                                <input type="url" name="image[]" class="form-control" id="image{{$index + 1}}" placeholder="Enter Image URL" required value="{{$imageUrl}}">
                                <a href="javascript:void(0);" class="btn btn-danger deletefields float-left mt-2" >
                                    Delete Url
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="form-group appField"></div>

                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
 <script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
    $(document).on('click', '.addfields', function(e) {
        e.preventDefault();
        var fieldHTML = `
            <div class="form-group">
                <label for="image">Image</label>
                <input type="url" name="image[]" class="form-control" id="image" placeholder="Enter Image URL">
                <a href="javascript:void(0);" class="text-dark removefields">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        `;
        $('.appField').append(fieldHTML);
    });

    $(document).on('click', '.removefields', function(e) {
        e.preventDefault();
        $(this).closest('.form-group').remove();
    });
    
    $(document).on('click','.deletefields', function(e){
  e.preventDefault();
  $(this).closest('.form-group').remove();
});

</script>