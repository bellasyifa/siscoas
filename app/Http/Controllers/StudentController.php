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
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('file');
        $filePath = $file->store('uploads');
        

        $student = new Student();
        $student->nrp = $request->input('nrp');
        $student->name = $request->input('name');
        $student->class = $request->input('class');
        $student->subject = $request->input('subject');
        $student->subject_coas = $request->input('subject');
        $student->day = $request->input('day');
        $student->timein = $request->input('timein');
        $student->timeout = $request->input('timeout');
        $student->email = $request->input('email');
        $student->file = $filePath; // Sesuaikan dengan kolom yang sesuai dalam model Student Anda
        $student->save();
        
        if($student->save()){

            return redirect()->route('student.index')->with('success', 'Data telah disimpan');
        }else{
            return redirect()->route('student.index')->with('error', 'gagal');

        }
    }
    
    public function downloadFile($fileName)
{
    $filePath = public_path('uploads/' . $fileName);

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        abort(404, 'File not found');
    }
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
        $student = Student::findOrFail($id);

        // Hapus data subjek
        $student->delete();
    
        return redirect('/student')->with('success', 'Data subjek berhasil dihapus.');
    }
}
