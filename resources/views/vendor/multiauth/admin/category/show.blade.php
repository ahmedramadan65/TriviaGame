@extends('vendor.multiauth.admin.app')

@section('main-content')

<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	    </section>

	    <!-- Main content -->
	    <section class="content">

	      <!-- Default box -->
	      <div class="box">
	        <div class="box-header with-border">
	          <h3 class="box-title">Categories</h3>
	          <a style="pointer-events: none;opacity: 0.5;" class="col-md-offset-5 btn btn-success" href="{{route('category.create')}}">Add New</a>
	          <div class="box-tools pull-right">
	            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
	                    title="Collapse">
	              <i class="fa fa-minus"></i></button>
	          </div>
	        </div>
	        <div class="box-body">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Table With Full Features</h3>
	            </div>
	            <!-- /.box-header -->
	            @include('vendor.multiauth.admin.layout.messages')
	            <div class="box-body" style="overflow-x:auto;">
	              <table id="example1" class="table table-bordered table-striped" rules=cols>
	                <thead>
	                <tr>
	                  <th>S.No</th>
	                  <th>Category Name</th>
	                  <th>Description</th>
	                  <th>Edit</th>
	                  <th>Delete</th>
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($categories as $category)	
	                <tr>
	                		
	                  <td>{{$loop->index + 1}}</td>
	                  <td>{{$category->name}}</td>
	                  <td>{{$category->description}}</td>
	                  <td><a href="{{(route('category.edit',$category->id))}}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                  <td>
	                  	<form id="delete-form-{{$category->id}}" method="post" action="{{(route('category.destroy',$category->id))}}" style="display: none">
	                  		{{csrf_field()}}
	                  		{{method_field('DELETE')}}
	                  	</form>	
	                  	<a href="#" onclick="
	                  	if(confirm('Are You Sure You Want To Delete This'))
	                  		{event.preventDefault();
	                  		document.getElementById('delete-form-{{$category->id}}').submit();
	                  		}else{event.preventDefault();
	                  		}">
	                  		<span class="glyphicon glyphicon-trash"></span></a>
	                  </td>
	                </tr>
	                @endforeach
	                </tbody>
	                </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	        </div>
	        <!-- /.box-body -->
	        
	        <!-- /.box-footer-->
	      </div>
	      <!-- /.box -->

	    </section>
	    <!-- /.content -->
	  </div>

@endsection	