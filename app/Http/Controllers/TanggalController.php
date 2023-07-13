<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggal;//add Absen Model - Data is coming from the database via Model.

class TanggalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanggal = Tanggal::all();
        return view ('tanggal.index')->with('tanggal',$tanggal);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tanggal.create');
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
        Tanggal::create($input);

        return redirect('tanggal')->with('flash_message', 'Tanggal Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tanggal = Tanggal::find($id);
        return view('tanggal.show')->with('tanggal', $tanggal);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $tanggal = Tanggal::find($id);

        return view('tanggal.edit')->with('tanggal', $tanggal);
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
        $tanggal = Tanggal::find($id);
        $input =$request->all();
        $tanggal->update($input);
        return redirect('tanggal')->with('flash_message', 'tanggal Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Tanggal::destroy($id);
        return redirect('tanggal')->with('flash_message', 'tanggal deleted!');
    }
}