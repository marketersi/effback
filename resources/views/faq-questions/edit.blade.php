@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update FAQs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit FAQs</li>
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
                <h3 class="card-title">{{$user->title}} FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form id="quickForm" action="{{ route('ques.update') }}"  method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                  <input type="hidden" name="user_id" value="{{ $user->id }}" id="user_id">
                    
                      <div class="col form-group">
                        <label for="title">Question</label>
                        <input type="text" name="question" class="form-control" id="question" placeholder="Enter Project Title" value="{{$user->question}}">
                      </div>
                      <div class="col form-group">
                        <label for="name">Answer</label>
                        <input type="text" name="answer" class="form-control" id="answer" placeholder="Enter Project Name" value="{{$user->answer}}">
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