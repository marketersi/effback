@include("auth.layouts.app")
<div class="content-wrapper">
  <!-- <section class="content"> -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>Feedback</h1> -->
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Client Feedback</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    @if ($message = Session::get('success'))
    <div id="success-message" class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @if ($error = Session::get('error'))
    <div class="alert alert-danger " id="errorMessage">
      <p>{{ $error }}</p>
    </div>
    @endif

    <script>
      setTimeout(function() {
        $('#success-message').fadeOut('slow');
      }, 4000);
    </script>

    <script>
      setTimeout(function() {
        $('#errorMessage').fadeOut('slow');
      }, 4000);
    </script>
    @endif

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div style="float: left;">
                <h3 class="card-title">Client Feedback</h3>
              </div>
              @if(count($clientFeedback)< 3)
              <div style="float: right;">
                <a href="{{ route('kreatywny-client-feedback.create') }}" class="btn btn-primary">  
                  Add feedback    
                </a>
              </div>
              @endif

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Client Name</th>
                    <th>Client Designation</th>
                    <th>Client Image</th>
                    <th>Client Review</th>
                    <th>Rating</th>
                    <th>Video URL</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clientFeedback as $value)
                  <tr>
                  <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->client_name}}</td>
                    <td>{{ $value->client_designation}}</td>
                    <td>{{ $value->image_url}}</td>
                    <td>{{ $value->review}}</td>
                    <td>{{ $value->rating}}</td>
                    <td>{{ $value->video_url}}</td>
                    <td><form method="get" action="{{ route('kreatywny-client-feedback.edit') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $value->id }}" >
                            <button type="submit" class="btn btn-info"><em class='fa fa-edit'></em></button>
                        </form>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>

      </div>
    </div>
    <!-- </section> -->
  </section>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>
<script>
  $(function() {

    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>