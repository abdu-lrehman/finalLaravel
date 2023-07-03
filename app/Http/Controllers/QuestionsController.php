<?php

namespace App\Http\Controllers;

use App\Models\questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "question" => 'required',
            "option" => 'required',
            "category" => 'required',
        ]);
        questions::create($data);
        return;
    }

    /**
     * Display the specified resource.
     */
    public function show(questions $questions)
    {
        $data = questions::all();
        return $data;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, questions $questions)
    {
        $data = $request->validate([
            "question" => 'required',
            "option" => 'required',
            "category" => 'required',
        ]);
        questions::save($data);
        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(questions $questions)
    {
        $questions->delete();
        return;
    }
}