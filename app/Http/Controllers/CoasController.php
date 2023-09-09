<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coas;

class CoasController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coas = Coas::all();
        return view('admin.coas.index',compact('coas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.coas.create');
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
            $validatedData = $request->validate([
                'nrp' => 'required|unique:coas',
                'name' => 'required',
                'class' => 'required',
                'subject' => 'required',
                'day' => 'required',
                'timein' => 'required',
                'timeout' => 'required',
                'email' => 'required|email',
            ]);
    
            // Buat entitas Coa baru
            $coas = new Coas();
            $coas->nrp = $validatedData['nrp'];
            $coas->name = $validatedData['name'];
            $coas->class = $validatedData['class'];
            $coas->subject = $validatedData['subject'];
            $coas->day = $validatedData['day'];
            $coas->timein = $validatedData['timein'];
            $coas->timeout = $validatedData['timeout'];
            $coas->email = $validatedData['email'];
            $coas->save();
    
    
            return redirect('/coas');
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
