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
	          <h3 class="box-title">Questions</h3>
	          <a class="col-md-offset-5 btn btn-success" href="{{route('question.create')}}">Add New</a>
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
	                  <th>Question</th>
	                  <th>Category</th>
	                  <th>Answers</th>
	                  <th>Right Answer</th>
	                  <th>Time In Secs</th>
	                  <th>Edit</th>
	                  <th>Delete</th>
	                </tr>
	                </thead>
	                <tbody>
	                @foreach($questions as $question)	
	                <tr>
	                		
	                  <td>{{$loop->index + 1}}</td>
	                  <td>{{$question->question}}</td>
	                  <td>
	                  	@foreach($categories as $category)
	                  		@if($question->category_id == $category->id)
	                  			{{$category->name}}<br>
	            			@endif
	                  	@endforeach
	                  </td>
	                  <td>
	                  	@foreach($answers as $answer)
	                  		@if($question->id == $answer->question_id)
	                  			{{$answer->answer1}}<br>
	                  			{{$answer->answer2}}<br>
	                  			{{$answer->answer3}}
	            			@endif
	                  	@endforeach
					   </td>
					   
	                  <td>
	                  	@foreach($answers as $answer)
		                  	@if($question->id == $answer->question_id)
			                  	@if($question->rightAnswer == 'answer1')
			                  		{{ $answer->answer1}}
			                  	@elseif($question->rightAnswer == 'answer2')
			                  		{{$answer->answer2}}
			                  	@elseif($question->rightAnswer == 'answer3')
			                  		{{$answer->answer3}}
			                  	@endif
			                @endif
	                  	@endforeach  				 
	                  </td>
	                  <td>{{$question->requiredTimeInSec}}</td>
	                  <td><a href="{{(route('question.edit',$question->id))}}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                  <td>
	                  	<form id="delete-form-{{$question->id}}" method="post" action="{{(route('question.destroy',$question->id))}}" style="display: none">
	                  		{{csrf_field()}}
	                  		{{method_field('DELETE')}}
	                  	</form>	
	                  	<a href="#" onclick="
	                  	if(confirm('Are You Sure You Want To Delete This'))
	                  		{event.preventDefault();
	                  		document.getElementById('delete-form-{{$question->id}}').submit();
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