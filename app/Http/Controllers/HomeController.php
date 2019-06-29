<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $categories = Category::all();
        return view('home',compact('categories'));
    }

    public function viewquiz($id)
    {   
        $category = Category::where('id','=',$id)->first();
        $category_id= $category->id;
        $questions = Question::where('category_id','=',$category->id)->get();
        $answers = Answer::where('category_id','=',$category->id)->get();
        //return $questions;
        return view('quiz',compact('questions','answers'));
    }
}
