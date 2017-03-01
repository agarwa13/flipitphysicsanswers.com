<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/course');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'slug' => 'required',
            'chapter_id' => 'required'
        ]);

        // Save Question
        $question = new Question();
        $question->title = title_case($request->title);
        $question->slug = str_slug($request->slug, '-');
        $question->body = $request->body;
        $question->chapter_id = $request->chapter_id;
        $question->solution = '';
        $question->save();

        // Add Solution (including Question ID)
        $question->solution = 'solutions/solution-'.$question->id.'.php';
        $question->save();

        // Save Solution to File
        Storage::put($question->solution, $request->input('solution') );

        // Return to Index
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $question = Question::where('slug','=',$slug)->firstOrFail();

        return view('question.show')
            ->with('question',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    /**
     * Solve the Question and return the result
     */
    public function solve(Request $request, $slug){

        $question = Question::where('slug','=',$slug)->firstOrFail();

        return view('question.solution')
            ->with('question',$question)
            ->with('request',$request);
    }
}
