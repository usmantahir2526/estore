@extends('admin.layouts.app')

@section('main-content')


      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <div style="display: none" class="alert" id="message"></div>

    <!-- Main content -->
    <section class="content">
<div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" id="upload_form">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="title">Enter Title:</label>
                    <input type="text" value="{{$product->title}}" name="title" class="form-control" required="" id="title" placeholder="Enter Title">
                  </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="price">Enter Price:</label>
                    <input type="text" value="{{$product->price}}" name="price" class="form-control" required="" id="price" placeholder="Enter Price">
                  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="quantity">Enter Quantity:</label>
                    <input type="text" value="{{$product->quantity}}" name="quantity" class="form-control" required="" id="quantity" placeholder="Enter Quantity">
                  </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label>Select Category:</label>
                    <select class="form-control" name="category" required="">
                      {{-- <option selected="" disabled="">Select Category</option> --}}
                      @foreach ($category as $categories)
                        <option value="{{$categories->id}}">{{ $categories->category }}</option
                          @if ($product->category_id == $categories->id)
                            selected="selected"
                          @endif
                          >
                      @endforeach
                    </select>
                  </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Select Sub Category:</label>
                    <select class="form-control" name="subcategory" required="">
                      {{-- <option selected="" disabled="">Select Category</option> --}}
                      @foreach ($subcategory as $subcategories)
                        <option value="{{$subcategories->id}}">{{ $subcategories->subcategory }}</option
                          @if ($product->subcategory_id == $subcategories->id)
                            selected="selected"
                          @endif
                          >
                      @endforeach
                    </select>
                  </div>
                    <div class="form-group">
                        <label>Feature Product:</label>
                        <span class="checkbox">
                            <input type="checkbox" name="feature" id="feature" value="1"  @if($product->feature == 1) checked @endif>
                        </span>
                    </div>
                    <div class="form-group">
                      <label>Select AnyOne: </label>
                      <label class="radio-inline">
                        <input type="radio" name="sale" value="New" @if ($product->sale == 'New')
                          Checked
                        @endif>New
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="sale" value="Hot" @if ($product->sale == 'Hot')
                          Checked
                        @endif>Hot
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="sale" value="Sale" @if ($product->sale == 'Sale')
                          Checked
                        @endif>Sale
                      </label>
                    </div>
                    <textarea class="form-control" name="short_desc" id="short_desc" rows="5" maxlength="400">{{$product->short_desc}}</textarea>
                     <span style="font-size:0.8em; color:#800;" id="textarea_message"></span>
                    <script type="text/javascript">
                      
                    $('textarea#short_desc').on('keyup',function() 
                    {
                      var maxlen = $(this).attr('maxlength');
                      
                      var length = $(this).val().length;
                      if(length > (maxlen-10) ){
                        // $('#textarea_message').text('max length '+maxlen+' characters only!')
                        alert('Type only 400 words');
                      }
                      else
                        {
                          // $('#textarea_message').text('');
                           alert('Type only 400 words');
                        }
                    });
                    </script>
                  <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                            <textarea name="body" id="body" class="textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->body }}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                    <!-- ./row -->
                  </section>
                  <div class="form-group" id="add">
                    <label for="exampleInputFile">Upload Images</label>
                    @if (count($product->images) > 0)
                      {{-- expr --}}

                    @foreach ($product->images as $img )
                      <div class="input-group" style="margin-top: 15px;">
                      <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image[]" name="image[]">
                        <label class="custom-file-label" for="exampleInputFile">{{$img->image}}</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" onclick="fun_addd()">Add More</span>
                        <span class="input-group-text" onclick="fun_dele({{$img->id}})">Remove</span>
                        <span><img src="{{url('/')}}/images/{{$img->image}}" class="avatar" alt="Avatar" width=35px></span>
                      </div>
                    </div>
                    @endforeach
                    @endif
                  </div>
                 {{--  <div class="form-group">
                    <select class="form-control" name="gender" required="">
                      <option selected="" disabled="">Select Gender</option>
                      @foreach ($gender as $gen)
                        <option value="{{ $gen->id }}">{{ $gen->gender }}</option>
                      @endforeach

                    </select>
                  </div> --}}
                  <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ route('pro.index') }}" class="btn btn-warning">Back</a>
                  </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
      </div>
      <div class="col-md-2"></div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@push('js')
<script>
  $(document).on('click', '.remove', function(event) {
    $(this).closest('.input-group').remove();
    /* Act on the event */
  });
  function fun_addd() {
    var abc = '<div class="input-group" style="margin-top: 15px;"><div class="custom-file"><input type="file" class="custom-file-input" id="image[]" name="image[]"><label class="custom-file-label" for="exampleInputFile">Choose file</label></div><div class="input-group-append"><span class="input-group-text" onclick="fun_addd();">Add More</span><span class="input-group-text remove">Remove</span></div></div>';
    $('#add').append(abc);
  }

   $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('pro.update',$product->id) }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class);
    window.location.href="{{ route('pro.index') }}";
    // $('#upload_image').html(data.upload_image);
   }
  })
 });

   function fun_dele(id) {
      // alert(id);
      $.ajax({
        url:"{{ url('admin/proimage/delete')}}/"+id,
        method:"POST",
        data:{id:id,"_token": "{{ csrf_token() }}"},
        success:function(data)
        {
          $('#message').css('display', 'block');
          $('#message').html(data.message);
          $('#message').addClass(data.class);

          {{--window.location.href="{{ route('pro.edit',$product->id) }}";--}}
        }

      });
   }
</script>

@endpush
