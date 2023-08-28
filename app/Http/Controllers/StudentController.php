<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->nrp = $request->input('nrp');
        $student->name = $request->input('name');
        $student->class = $request->input('class');
        $student->subject = $request->input('subject');
        $student->day = $request->input('day');
        $student->time = $request->input('time');
        $student->email = $request->input('email');
        
        
        // Upload transkrip file and save its name in the database
        if ($request->hasFile('transkrip')) {
            $transkripFileName = $request->file('transkrip')->getClientOriginalName();
            $request->file('transkrip')->storeAs('transkrips', $transkripFileName, 'public');
            $student->transkrip_file = $transkripFileName;
        }

        $student->save();

        return redirect()->route('form')->with('success', 'Data telah disimpan');
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
        //
    }
}
