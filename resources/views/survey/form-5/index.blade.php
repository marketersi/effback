@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- <section class="content"> -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1>DataTables</h1> -->
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Form 5</li>
              </ol>
            </div>
          </div>
        </div>
    </section>
    <div class="content">
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
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Form-5 Data</h3>
                            </div>
                            @if(count($fo5)< 1)
                            <div class="col-sm-2 pr-0">
                                <a href="{{ route('survey-FO5.create') }}" class="btn btn-primary float-right">Add Data</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Title</th>
                                    <th>Text Below Input</th>
                                    <th>List Heading</th>
                                    <th>List Items</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $i = 1;
                                @endphp
                                @foreach ($fo5 as $data)
                                  <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->textbelowInput }}</td>
                                    <td>{{ $data->listHeading }}</td>
                                    <td>
                                      <ol>
                                        @foreach(json_decode($data->listItems) as $item)
                                          <li>{{$item}}</li>
                                        @endforeach
                                      </ol>
                                    </td>
                                    <td>
                                      <form method="get" action="{{ route('survey-FO5.edit') }}">
                                          @csrf
                                          <input type="hidden" name="user_id" value="{{ $data->id }}">
                                          <button type="submit" class="btn btn-info"><em class='fa fa-edit'></em></button>
                                      </form>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
            <!-- </section> -->
    </div>
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
        "lengthMenu": [10],
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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