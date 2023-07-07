<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;//add Absen Model - Data is coming from the database via Model.

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absen = Absen::all();
        return view ('absen.index')->with('absen',$absen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Absen::create($input);

        return redirect('absen')->with('flash_message', 'Absen Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $absen = Absen::find($id);
        return view('absen.show')->with('absen', $absen);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $absen = Absen::find($id);
        return view('absen.edit')->with('absen', $absen);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $absen = Absen::find($id);
        $input =$request->all();
        $absen->update($input);
        return redirect('absen')->with('flash_message', 'absen Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Absen::destroy($id);
        return redirect('absen')->with('flash_message', 'absen deleted!');
    }
}
