<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('programstudi.index')
            ->with('prodis', ProgramStudi::all());
    }


    public function create()
    {
        return view('programstudi.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama_prodi' => 'required|string|max:100|',
        ]);
        $prodi = new ProgramStudi($validatedData);
        $prodi->save();
        return redirect(route('dosenList'))->with('success', 'Dosen has been added successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(ProgramStudi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramStudi $prodi)
    {
        return view('programstudi.edit')->with('prodi', $prodi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramStudi $dosen)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|email|max:255|unique:dosen,email,' . $dosen->nik . ',nik',
        ]);
    
        $dosen->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('dosenList')->with('success', 'Dosen berhasil diperbarui.');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramStudi $dosen)
    {
        $dosen->delete();
        return redirect(route('dosenList'))->with('Success', 'Dosen berhasil dihapus');
    }
}
