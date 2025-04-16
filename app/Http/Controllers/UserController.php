<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'id_user' => 'required|integer|min:1|unique:user,id_user',
            'nama' => 'required|string|max:100',
            'program_studi_id_prodi' => 'required|integer|min:1',
        ]);

        $user = new User($validated);
        $user->role = 'Mahasiswa';
        $user->save();
    }
    //     // Call the saveStudent method on the User model
    //     $success = User::saveStudent(
    //         $validated['id_user'],
    //         $validated['nama'],
    //         $validated['program_studi_id_prodi']
    //     );

    //     if ($success) {
    //         // Redirect to the form with a success message
    //         return redirect()->route('student.form')->with('status', 'success')->with('message', 'Student data saved successfully.');
    //     } else {
    //         // Redirect back with an error message
    //         return redirect()->route('student.form')->with('status', 'error')->with('message', 'Failed to save student data.');
    //     }
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
?>