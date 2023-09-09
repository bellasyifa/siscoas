<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ini adalah untuk mengirim data dari table subjects ke view
        $subjects = Subject::All();
        return view('admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // Validasi data yang diterima dari request
            $validatedData = $request->validate([
                'semester' => 'required|string',
                'subject_name' => 'required|string',
                'class' => 'required|string',
            ]);
    
            // Buat instance dari model Subject dan isi dengan data yang divalidasi
            $subject = new Subject();
            $subject->semester = $validatedData['semester'];
            $subject->subject_name = $validatedData['subject_name'];
            $subject->class = $validatedData['class'];
    
            // Simpan data ke dalam tabel
            $subject->save();
    
            return redirect('/subject');
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
        $subject = Subject::findOrFail($id);

        // Hapus data subjek
        $subject->delete();
    
        return redirect('/subject')->with('success', 'Data subjek berhasil dihapus.');

    }
}
