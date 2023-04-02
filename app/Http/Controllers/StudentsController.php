<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = students::all();
        return view('welcome',compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    public function details($studentId)
    {
        $student = students::find($studentId);
        return view('details' , compact("student"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentsRequest $request)
    {
       $student = new students;
       $student->firstname = $request->firstname;
       $student->lastname = $request->lastname;
       $student->email = $request->email;
       $student->save();
       return Redirect::to("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentsRequest  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update($studentId)
    {
        $student=students::find($studentId);
        return view('edit', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $student = students::find($request->studentId);

        $student->delete();
        return Redirect::to('/home');
    }
    public function editStore(StorestudentsRequest $request)
    {

        $student=students::find($request->studentId);
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->save();
        return Redirect::to("/");
    }
}
