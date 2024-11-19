@include("auth.layouts.app")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Logo Accordion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Logo Accordion</li>
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
                <h3 class="card-title">Logo Accordion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <form id="quickForm" action="{{ route('logo.accordion1.store') }}"  method="post">
                  @csrf
                  <div class="card-body">
                    
                      <div class="form-group">
                        <label for="label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{optional($details->where('type', 'title')->first())->message ?? '' }}">
                      </div>
                      <div class="form-group">
                        <label for="content">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" value="{{optional($details->where('type', 'description')->first())->message ?? ''}}">
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
          <!-- <div class="col-md-6">

          </div> -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>