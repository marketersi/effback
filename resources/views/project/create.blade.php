@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Project</li>
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
                <h3 class="card-title">Add Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <form id="quickForm" action="{{ route('project.store') }}" enctype="multipart/form-data" method="post">
                  @csrf
                  <div class="card-body">
                    <din class="row">
                      <div class="col form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Project Title">
                      </div>
                      <div class="col form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Project Name" >
                      </div>
                    </din>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="url" name="image" class="form-control" id="image"placeholder="Enter Image URL">
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address">
                      </div>
                      <div class="col form-group">
                        <label for="phone">Contact</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone No." >
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