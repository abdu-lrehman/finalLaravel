<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
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
        quiz::create($data);
        return;
    }

    /**
     * Display the specified resource.
     */
    public function show(quiz $quiz)
    {
        $data = quiz::all();
        return $data;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, quiz $quiz)
    {
        $data = $request->validate([
            "question" => 'required',
            "option" => 'required',
            "category" => 'required',
        ]);
        quiz::save($data);
        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quiz $quiz)
    {
        $quiz->delete();
        return;
    }
}