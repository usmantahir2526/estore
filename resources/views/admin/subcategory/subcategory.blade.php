@extends('admin.layouts.app')

@section('main-content')


		  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Category Page</li>
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
                <h3 class="card-title">Register SubCategory</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('sub.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="subcategory">Enter Sub Category:</label>
                    <input type="text" name="subcategory" class="form-control" required="" id="subcategory" placeholder="Enter Sub Category">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="category" required="">
                      <option selected="" disabled="">Select Category</option>
                      @foreach ($category as $categories)
                        <option value="{{$categories->id}}">{{ $categories->category }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="gender" required="">
                      <option selected="" disabled="">Select Gender</option>
                      @foreach ($gender as $gen)
                        <option value="{{ $gen->id }}">{{ $gen->gender }}</option>
                      @endforeach
                        
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ route('sub.index') }}" class="btn btn-warning">Back</a>
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