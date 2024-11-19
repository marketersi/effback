@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Percentage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Percentage</li>
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
                <h3 class="card-title">{{$user->title}} Percentage</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form id="quickForm" action="{{ route('percentage.update') }}" enctype="multipart/form-data" method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                  <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id">
                    <din class="row">
                      <div class="col form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Project Title" value="{{$user->title}}">
                      </div>
                      <div class="col form-group">
                        <label for="name">Percentage Value</label>
                        <input type="text" name="percentage_value" class="form-control" id="percentage_value" placeholder="Enter Project Name" value="{{$user->Percentage_value}}">
                      </div>
                    </din>
                    
                    <div class="row">
                      <div class="col form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" class="form-control" id="website" placeholder="Enter Email Address" value="{{$user->website}}">
                      </div>
                      <div class="col form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="Enter Phone No." value="{{$user->category}}" >
                      </div>
                    </div>
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