<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\ProgramStudi;
=======
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
<<<<<<< HEAD
        $programStudis = ProgramStudi::all();
        return view('auth.register', compact('programStudis'));
=======
        return view('auth.register');
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
<<<<<<< HEAD
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:100', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:mahasiswa,ketua,tatausaha'],
            'program_studi_id_prodi' => ['required', 'exists:program_studi,id_prodi'],
        ]);

        // Create the user manually
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->program_studi_id_prodi = $request->program_studi_id_prodi;
        $user->save();
=======
            'id_user' => ['required', 'int', 'max:11', 'unique:user'],
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:user'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Tata Usaha',
            'program_studi_id_prodi' => 1,
        ]);
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf

        event(new Registered($user));

        Auth::login($user);

<<<<<<< HEAD
        // Redirect based on role
        switch ($user->role) {
            case 'mahasiswa':
                return redirect()->route('mahasiswa.dashboard');
            case 'ketua':
                return redirect()->route('ketua.dashboard');
            case 'tatausaha':
                return redirect()->route('tatausaha.dashboard');
            default:
                return redirect('/');
        }
    }
}
=======
        return redirect(route('dashboard', absolute: false));
    }
}
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
