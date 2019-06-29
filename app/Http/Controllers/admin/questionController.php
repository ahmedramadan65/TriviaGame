<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Answer;
use App\Category;
class questionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $questions = Question::all();
        $answers = Answer::all();
        $categories = Category::all();
        return view('vendor.multiauth.admin.question.show',compact('questions','answers','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        $questions = Question::all();
        $answers = Answer::all();
        return view('vendor.multiauth.admin.question.create',compact('questions','answers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //return $request->all();
        $this->validate($request,[
            'question'=>'required|min:10|max:191',
            'answer1'=>'required|max:191',
            'answer2'=>'required|max:191',
            'answer3'=>'required|max:191',
            'rightAnswer'=>'required',
            'category'=>'required',
        ]);
        $question = new Question();
        $answer = new Answer();

        if ($request->timeinmin != 0){
            $seconds = ($request->timeinmin * 60) + $request->timeinsec;
            $question->requiredTimeInSec = $seconds;
        }else{
            $question->requiredTimeInSec = $request->timeinsec;
        }

        $question->question = $request->question;
        $question->rightAnswer = $request->rightAnswer;
        $question->category_id = $request->category;
        $question->save();

        $answer->answer1 = $request->answer1;
        $answer->answer2 = $request->answer2;
        $answer->answer3 = $request->answer3;
        $answer->category_id = $request->category;
        $answer->question_id = $question->id;
        
        $answer->save();

        return redirect(route('question.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $question = Question::find($id);
        $question_id = $question->id;
        $answers = Answer::all();
        $categories = Category::all();
        $myanswers = $answers->where('question_id','=',$question_id)->first();
        return view('vendor.multiauth.admin.question.edit',compact('question','myanswers','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $this->validate($request,[
            'question'=>'required|min:10|max:191',
            'answer1'=>'required|max:191',
            'answer2'=>'required|max:191',
            'answer3'=>'required|max:191',
            'rightAnswer'=>'required',
            'category'=>'required',
        ]);
        
        $question = Question::find($id);
        $question_id = $question->id;
        $answers = Answer::all();
        $myanswers = $answers->where('question_id','=',$question_id)->first();

        if ($request->timeinmin != 0){
            $seconds = ($request->timeinmin * 60) + $request->timeinsec;
            $question->requiredTimeInSec = $seconds;
        }else{
            $question->requiredTimeInSec = $request->timeinsec;
        }


        $question->question = $request->question;
        $question->rightAnswer = $request->rightAnswer;
        $question->category_id = $request->category;
        $question->update();

        $myanswers->answer1 = $request->answer1;
        $myanswers->answer2 = $request->answer2;
        $myanswers->answer3 = $request->answer3;
        $myanswers->question_id = $question->id;
        $myanswers->category_id = $request->category;
        
        $myanswers->update();

        return redirect(route('question.index'))->with('message','Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('id',$id)->delete();
        return redirect()->back()->with('message','Question deleted successfully');
    }
}
