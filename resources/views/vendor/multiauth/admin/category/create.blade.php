@extends('vendor.multiauth.admin.app')

@section('headSection')
  <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('main-content')  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('vendor.multiauth.admin.layout.messages')
            <form role="form" name="myForm" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value="{{old('name')}}" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Category Description</label>
                    <textarea class="form-control rounded-0" id="description" rows="8"placeholder="Enter Brief Description " name="description" required >{{old('description')}}</textarea>
                  </div>

                  <div>
                      <label for="Image">Category Image</label>
                      <input type="file" name="image" id="image" required>
                  </div>
 
                </div class="form-group">     
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('category.index')}}" class="btn btn-warning">back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection