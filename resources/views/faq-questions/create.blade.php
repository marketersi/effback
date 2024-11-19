@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add FAQ</li>
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
                <h3 class="card-title">Add FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <form id="quickForm" action="{{ route('ques.store') }}"  method="post">
                  @csrf
                  <div class="card-body">
                    
                      <div class="col form-group">
                        <label for="title">Question</label>
                        <input type="text" name="question" class="form-control" id="question" placeholder="Enter Question">
                      </div>
                      <div class="col form-group">
                        <label for="name">Answer</label>
                        <input type="text" name="answer" class="form-control" id="answer" placeholder="Enter Answer" >
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