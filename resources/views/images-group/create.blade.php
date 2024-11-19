@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Images</li>
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
                <h3 class="card-title">Add Images</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="p-3">
                            <a href="javascript:void(0);" class="btn btn-success addfields float-right">
                                Add Url
                            </a>
                        </div>
                <form id="quickForm" action="{{ route('image.group.store') }}"  method="post">
                  @csrf
                  
                  <div class="card-body">
                  
                      <div class="form-group">
                        <label>Image URL</label>
                        <input type="url" name="group[]" class="form-control" id="image" placeholder="Enter Image URL">
                      </div>
                      <div class="form-group appField"></div>
                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!-- <div class="col-md-6">

          </div> -->
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
            <input type="url" name="group[]" class="form-control" id="image" placeholder="Enter Image URL">
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

  </script>