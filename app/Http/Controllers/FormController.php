<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; // Pastikan namespace dan nama model benar


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.submission.index');
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
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'nrp' => 'required|unique:students',
            'name' => 'required',
            'day' => 'required',
            'subject' => 'required',
            'timein' => 'required',
            'timeout' => 'required',
            'email' => 'required|email',
            'file' => 'required|file|mimes:pdf', // Ubah sesuai dengan tipe file yang diizinkan
        ]);
    
        // Simpan data mahasiswa ke database
        $student = new Student;
        $student->nrp = $request->nrp;
        $student->name = $request->name;
        $student->day = $request->day;
        $student->subject = $request->subject;
        $student->timein = $request->timein;
        $student->timeout = $request->timeout;
        $student->email = $request->email;
    
        // Simpan file ke server dan catat link-nya di database
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads', $fileName); // Simpan file di folder 'uploads'
    
            // Simpan link file ke dalam database
            $student->file = $fileName;
        }
    
        $student->save();
    
        return redirect()->route('student.index')->with('success', 'Data mahasiswa berhasil disimpan.');
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
