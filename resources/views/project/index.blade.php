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
            <li class="breadcrumb-item active">Project</li>
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
                <h3 class="card-title">Project</h3>
              </div>
              <div class="col-sm-2 pr-0 float-right">
                   
                      <a href="{{ route('project.create') }}" class="btn btn-primary float-right">Add Project Data</a>
                          {{--@if(count($users) <= 2)
                              <a href="{{ route('project.create') }}" class="btn btn-primary float-right">Add Project Data</a>
                          @else
                              <button class="btn btn-primary float-right" onclick="showAlert()">Add Project Data</button>
                          @endif--}}
              
                      </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>File</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                  @endphp
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $i++ }}</td>
                      <td>{{$user->title}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->image}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>
                        <form method="get" action="{{ route('project.edit') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-info"><em class='fa fa-edit'></em></button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
                <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                  </tr>
                </tfoot> -->
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

  function showAlert() {
        alert("You cannot add more than 3 projects.");
    }
</script>