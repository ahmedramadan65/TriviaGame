@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
        	<div style="text-align: left" class="offset-md-2">
        		<h3 class="mb-5" style="text-align: center;">
        			<div class=" clockdiv" id="timeleft">
        	Time Left
        	<p id="demo"></p>
        	
		</div>
			        <em id="score" style="font-size: 30px"></em>
			        <a style="display: none;" id="home" class="btn btn-primary js-scroll-trigger" href="{{route('home')}}">Back Home</a>
			    </h3>
			    <div id="main">
	        	<h3 class="mb-5">
			        <em id="question"></em>
			    </h3>
				<form role="form" name="myForm" >
	              	{{-- {{csrf_field()}} --}}

				    <h5 class="mb-5 ">
				        <div class="form-group">
	                      <label for="answer1">A)</label>
	                      <label class="radio-inline"><input type="radio" name="answercheck" value="answer1" required><em id="answer1"></em></label>
	                    </div>
				    </h5>
				    <h5 class="mb-5">
				        <div class="form-group">
	                      <label for="answer1">B)</label>
	                      <label class="radio-inline"><input type="radio" name="answercheck" value="answer2" required><em id="answer2"></em></label>
	                    </div>
				    </h5>
				    <h5 class="mb-5">
				        <div class="form-group">
	                      <label for="answer1">C)</label>
	                      <label class="radio-inline"><input type="radio" name="answercheck" value="answer3" required><em id="answer3"></em></label>
	                    </div>

				    </h5>

				    <button id="submitAnswer" onclick="checkanswer(); return false;" class="btn btn-primary btn-xl js-scroll-trigger" >Submit Answer</button>
				    <a href="#!" class="active btn btn-primary btn-xl js-scroll-trigger" id="next" onclick="nextQuestion();  return false; " class="btn btn-primary btn-xl js-scroll-trigger">Next</a>
				</form>
			</div>
				
			</div>

        </div>
        
    </div>
</div>        
@endsection
@section('scripts')
<script type="text/javascript">
var questions = {!! json_encode($questions->toArray()) !!};
var answers = {!! json_encode($answers->toArray()) !!};
let score = 0;
document.getElementById("score").innerHTML = "Your Score " + score;
var countDownDate = new Date().getTime();
let i=0;
var distance;
// Update the count down every 1 second

var x = setInterval(function() {


  // Get today's date and time
  var now = new Date().getTime();
  var questions = {!! json_encode($questions->toArray()) !!};
  var time = parseInt(questions[i]['requiredTimeInSec']);
 

  // Find the distance between now and the count down date
   distance = (countDownDate + time*1000) - now;

  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s " ;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    var theRightAnswer=	questions[i]['rightAnswer'];
	document.getElementById(theRightAnswer).style.backgroundColor = "green";
	var btn = document.getElementById("submitAnswer"); 
	btn.disabled = true;
	var btn1 = document.getElementById("next"); 
	btn1.classList.remove("active");

    
  }
}, 1000);


document.getElementById("question").innerHTML = questions[i]['question'];
document.getElementById("answer1").innerHTML = answers[i]['answer1'];
document.getElementById("answer2").innerHTML = answers[i]['answer2'];
document.getElementById("answer3").innerHTML = answers[i]['answer3'];

function nextQuestion(){
	
	if( i < questions.length - 1 ) {
		countDownDate = new Date().getTime();
		var x = setInterval(function() {


		// Get today's date and time
		var now = new Date().getTime();
		var questions = {!! json_encode($questions->toArray()) !!};
		var time = parseInt(questions[i]['requiredTimeInSec']);


		// Find the distance between now and the count down date
		distance = (countDownDate + time*1000) - now;

		// Time calculations for days, hours, minutes and seconds
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Display the result in the element with id="demo"
		document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s " ;

		// If the count down is finished, write some text 
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
			var theRightAnswer=	questions[i]['rightAnswer'];
			document.getElementById(theRightAnswer).style.backgroundColor = "green";
			var btn = document.getElementById("submitAnswer"); 
			btn.disabled = true;
			var btn1 = document.getElementById("next"); 
			btn1.classList.remove("active");

		}
		}, 1000);
		i++;
		document.getElementById('answer1').style.backgroundColor = '';
	   	document.getElementById('answer2').style.backgroundColor = '';
		document.getElementById('answer3').style.backgroundColor = '';
		document.getElementById("question").innerHTML = questions[i]['question'];
		document.getElementById("answer1").innerHTML = answers[i]['answer1'];
		document.getElementById("answer2").innerHTML = answers[i]['answer2'];
		document.getElementById("answer3").innerHTML = answers[i]['answer3'];
		document.getElementById("score").innerHTML = "Your Score " + score;
		var btn1 = document.getElementById("next"); 
		btn1.classList.add("active");
		var btn = document.getElementById("submitAnswer"); 
		btn.disabled = false;
   		


	}else{
	    document.getElementById("main").style.display='none';
	    document.getElementById("timeleft").style.display='none';
	    document.getElementById("home").style.display='block';

	
	}
	
}

(window).getElementById('next').onclick(function(){
return false;
});

function checkanswer(){
	
	var radios = document.getElementsByName("answercheck");
	var checkedd =-1 ;
	for (var b = 0, len = radios.length; b < len; b++) {
		if (radios[b].checked) {
		  checkedd = radios[b].value;
		}

	}
	if(checkedd == -1){
		alert('Please Select Answer');
		return false;
	}else{
		clearInterval(x);
		document.getElementById("demo").innerHTML = "";
		if(questions[i]['rightAnswer']==checkedd)
		{
			document.getElementById(checkedd).style.backgroundColor = "green";
			var btn = document.getElementById("next"); 
			btn.disabled = false;
			score += 5;
			document.getElementById("score").innerHTML = "Your Score " + score;
			


		}else{
			document.getElementById(checkedd).style.backgroundColor = "red";
			var btn = document.getElementById("next"); 
			btn.disabled = false;
			var theRightAnswer=	questions[i]['rightAnswer'];
			document.getElementById(theRightAnswer).style.backgroundColor = "green";
			

			
		}
		var btn = document.getElementById("submitAnswer"); 
		btn.disabled = true;
		var btn1 = document.getElementById("next"); 
		btn1.classList.remove("active");
		countDownDate = 0;

	
	
	}
	


}

</script> 

@endsection