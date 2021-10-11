<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        
        return view('asobis.index', [
            'questions' => $questions,    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        
        return view('asobis.question', [
            'question' => $question,    
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'category' => 'required',
           'age' => 'required',
           'title' => 'required|max:255',
           'content' => 'required|max:10000',
        ]);
        
        $request->user()->questions()->create([
            'category' => $request->category,
            'age' => $request->age,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        
        return view('asobis.show', [
            'question' => $question,    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = \App\Question::findOrFail($id);
        
        if (\Auth::id() === $question->user_id){
            $question->delete();
        }
        
        return back();
    }
}
