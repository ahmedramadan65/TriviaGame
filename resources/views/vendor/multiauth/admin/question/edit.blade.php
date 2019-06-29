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
              <h3 class="box-title">Questions</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('vendor.multiauth.admin.layout.messages')
            <form role="form" name="myForm" action="{{route('question.update',$question->id)}}" method="post" onsubmit="return validateForm()">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="question">Question</label>
                    <textarea class="form-control rounded-0" id="question" rows="8"placeholder="Enter Question" name="question" required >@if(old('question')){{old('question')}}@else {{$question->question}}@endif</textarea>
                  </div>
                  

                  <div class="form-group">
                    <label for="timeinsec">Time For Question</label><br>
                    <label for="timeinsec">Seconds</label>
                    <input type="number" class="form-control" style="width: 20%;display: inline-block;" id="timeinsec" placeholder="Seconds" name="timeinsec" value="@if(old('timeinsec')){{old('timeinsec')}}@else{{$question->requiredTimeInSec}}@endif" min="0" max="60" required>
                    <label for="timeinsec">Minutes</label>
                    <input type="number" class="form-control" style="width: 20%;display: inline-block;" id="timeinsec" placeholder="Minutes" name="timeinmin" value="0" min="0" max="60" required>
                    <select required name="category" id="category">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $question->category_id) selected @endif>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                    <label>Enter Answers and select the right answer</label>
                    <div class="form-group">
                      <label for="answer1">Answer 1</label>
                      <input type="text" class="form-control" style="width: 60%;display: inline-block;" id="answer1" placeholder="Enter choice 1" name="answer1" value="@if(old('answer1')){{old('answer1')}}@else {{$myanswers->answer1}}@endif" required>
                      <label class="radio-inline"><input type="radio" name="rightAnswer" value="answer1" required 
                        {{ $question->rightAnswer == 'answer1' ? 'checked' : '' }}>Answer 1</label>
                    </div>
                    <div class="form-group">
                      <label for="answer2">Answer 2</label>
                      <input type="text" class="form-control" style="width: 60%;display: inline-block;" id="answer2" placeholder="Enter choice 2" name="answer2" value="@if(old('answer2')){{old('answer2')}}@else {{$myanswers->answer2}}@endif" required>
                      <label class="radio-inline"><input type="radio" name="rightAnswer" value="answer2"
                        {{ $question->rightAnswer == 'answer2' ? 'checked' : '' }}>Answer 2
                    </div>
                    <div class="form-group">
                      <label for="answer3">Answer 3</label>
                      <input type="text" class="form-control" style="width: 60%;display: inline-block;" id="answer3" placeholder="Enter choice 3" name="answer3" value="@if(old('answer3')){{old('answer3')}}@else {{$myanswers->answer3}}@endif" required>
                      <label class="radio-inline"><input type="radio" name="rightAnswer" value="answer3"
                        {{ $question->rightAnswer == 'answer3' ? 'checked' : '' }}>Answer 3
                    </div>
                  </div>     
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{route('question.index')}}" class="btn btn-warning">back</a>
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
 
@section('mynewscripts')
<script type="text/javascript">
  function validateForm() {
  var sec = document.forms["myForm"]["timeinsec"].value;
  var min = document.forms["myForm"]["timeinmin"].value;
  var answer1 = document.forms["myForm"]["answer1"].value;
  var answer2 = document.forms["myForm"]["answer2"].value;
  var answer3 = document.forms["myForm"]["answer3"].value;
  if (sec == 0 && min == 0) || (sec == "0" && min == "0") {
    alert("Seconds and Minutes cannot both be Zero");
    return false;
  }
  if(answer1 === answer3 && answer1 === answer2 && answer1 !== null) {
    alert("The Answers cannot be all the same");
    return false;
  }
}
</script> 
@endsection