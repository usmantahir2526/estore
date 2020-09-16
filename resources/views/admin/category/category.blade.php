@extends('admin.layouts.app')

@section('main-content')


		  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if (session()->has('status'))
      <p class="alert alert-success">{{ session()->get('status') }}</p>
    @endif

    <!-- Main content -->
    <section class="content">
<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Register Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('main.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Enter Category:</label>
                    <input type="text" name="category" class="form-control" required="" id="category" placeholder="Enter Category">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ route('main.index') }}" class="btn btn-warning">Back</a>
                  </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
      </div>
      <div class="col-md-3"></div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
		

@endsection