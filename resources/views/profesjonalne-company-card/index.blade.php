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
                <li class="breadcrumb-item active">Company Card</li>
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
                                <h3 class="card-title">Company Card Data</h3>
                            </div>
                            <div class="col-sm-2 pr-0">
                              @if(count($companyCard) < 3)
                              <a href="{{ route('profesjonalne-companycard.create') }}" id="addCompanyCardBtn" class="btn btn-primary float-right">Add Company card Data</a>
                              @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Main Title</th>
                                    <th>Subtitle</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $i = 1;
                                @endphp
                                @foreach ($companyCard as $data)
                                  <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->main_title }}</td>
                                    <td>{{ $data->subtitle }}</td>
                                    <td> 
                                    <form method="get" action="{{ route('profesjonalne-companycard.edit') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}" >
                                        <button type="submit" class="btn btn-info"><em class='fa fa-edit'></em></button>
                                    </form>
                                        <!-- <a href="{{ route('profesjonalne-companycard.delete', ['id' => $data->id]) }}" onclick="return confirm('Are you sure you want to delete this item?')">
                                        <button class="btn btn-danger">
                                          <em class='fa fa-trash'></em>
                                        </button></a> -->

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