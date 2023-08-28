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
        try {
            // Validasi input form
            $validatedData = $request->validate([
                'nrp' => 'required|string',
                'name' => 'required|string',
                'email' => 'required|email',
                'class' => 'required|string',
                'subject' => 'required|string',
                'day' => 'required|array', // Array of days
                'day.*' => 'string|distinct', // Each day should be distinct
                'timein' => 'required|array', // Array of timein values
                'timein.*' => 'date_format:H:i',
                'timeout' => 'required|array', // Array of timeout values
                'timeout.*' => 'date_format:H:i',
                'transkrip' => 'nullable|image|mimes:jpeg', // Optional JPEG image file
            ]);

            // Create and save student record
            $student = new Student();
            $student->nrp = $validatedData['nrp'];
            $student->name = $validatedData['name'];
            $student->email = $validatedData['email'];
            $student->class = $validatedData['class'];
            $student->subject = $validatedData['subject'];
            $student->save();

            // Save availability schedule (assuming there's a relation in the Student model)
            $student->availability()->createMany(
                array_map(function ($day, $timein, $timeout) {
                    return [
                        'day' => $day,
                        'timein' => $timein,
                        'timeout' => $timeout,
                    ];
                }, $validatedData['day'], $validatedData['timein'], $validatedData['timeout'])
            );

            // Handle transcript upload
            if ($request->hasFile('transkrip')) {
                $transkripFileName = $request->file('transkrip')->getClientOriginalName();
                $request->file('transkrip')->storeAs('transkrips', $transkripFileName, 'public');
                $student->transkrip_file = $transkripFileName;
                $student->save();
            }

            return redirect()->back()->with('success', 'Data telah disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
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
        //
    }
}
