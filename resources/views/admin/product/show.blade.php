@extends('admin.layouts.app')

@section('main-content')


		  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Product Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card">
              <div class="card-header">

                <center><span><a href="{{ route('pro.create') }}" class="btn btn-info">Add New</a></span></center>
                @if (session()->has('status'))
                	<p class="alert alert-success">{{ session()->get('status') }}</p>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach ($product as $pro)

	                  <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td><span data-toggle="modal" data-target="#exampleModal{{ $pro->id }}">{{ $pro->title }}</span></td>
                      <td>{{ $pro->price }}</td>
                      <td>{{ $pro->quantity }}</td>

	                    <td><a href="{{ route('pro.edit',$pro->id) }}" class="btn btn-success">Edit</a></td>
	                    <td>
	                    	<form method="post" action="{{ route('pro.destroy',$pro->id) }}">
	                    		@csrf
	                    		@method('DELETE')
	                    		<button class="btn btn-danger" type="submit">Delete</button>
	                    	</form>
	                    </td>
	                  </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $pro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product Detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <label>Title: </label> {{$pro->title}}<br>
                          <label>Price: </label> {{$pro->price}}<br>
                          <label>Quantity: </label> {{$pro->quantity}}<br>
                          <label>Categories: </label> {{$pro->categories->category}}<br>
                          <label>Sub Category: </label> {{$pro->subcategories->subcategory}}<br>
                          <label>Product Type: </label> {{$pro->sale}}<br>
                              <label>Feature: </label> {{$pro->feature == 1 ? 'Featured Product' : 'Not A Featured Product'}}<br>
                          <label>Images: </label> @foreach ($pro->images as $proimg)
                            <img src="{{url('/')}}/images/{{$proimg->image}}" class="avatar" alt="Avatar" width=100px>
                          @endforeach
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  	@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr. No</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- Button trigger modal -->
              <!-- /.card-body -->
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
