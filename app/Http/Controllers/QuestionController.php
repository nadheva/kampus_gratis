<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\UserQuestion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Question::all();
        $userQuestion = UserQuestion::all();
        return view('admin.faq.index', compact('faq', 'userQuestion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
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
            'ask' => 'required',
            'answer' => 'required',
            'status' => 'required'
        ]);

        Question::create([
            'ask' => $request->ask,
            'answer' => $request->answer,
            'status' => $request->status
        ]);
        return redirect()->route('data-faq.index')
            ->with('success', 'Data FAQ Berhasil Ditambahkan');
    }

    public function questionStore(Request $request)
    {
        $request->validate([
            'ask' => 'required',
        ]);

        UserQuestion::create([
            'ask' => $request->ask,
            'user' => 'Unknown',
            'isanswer' => 0
        ]);
        return redirect(route('faq'))
            ->with('success', 'Pertanyaan berhasil dikirimkan');
    }

    public function faq()
    {
        $faq = Question::all();
        $question = UserQuestion::all()->count();
        $answer = UserQuestion::all()->sum('isanswer');

        // $latest = UserQuestion::all()->sortByDesc('created_at')->take(1)->toArray();
        
        // $latest = UserQuestion::all()->orderBy('created_at','desc')->limit(5)->get();
        // dd($latest);
        return view('landingpage.faq', compact('question', 'answer', 'faq'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Question::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $faq = Question::findOrFail($id);
        
        $faq->ask = $request->ask;
        $faq->answer = $request->answer;
        $faq->status = $request->status;

        $faq->save();
        return redirect()->route('data-faq.index')
        ->with('edit', 'FAQ Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('id', $id)->delete();
        return redirect()->route('data-faq.index')
        ->with('delete', 'Data FAQ Berhasil Dihapus');
    }
}
