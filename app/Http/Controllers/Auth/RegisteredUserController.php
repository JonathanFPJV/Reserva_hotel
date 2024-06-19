<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'apellidos' => ['required', 'string', 'max:45'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:45', 'unique:'.User::class],
            'telefono' => ['required', 'string', 'max:45'],
            'direccion' => ['required', 'string', 'max:45'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'password' => Hash::make($request->password),
            'fecha_registro' => Carbon::now()->toDateString(),
            'estado_usuario' => 'activo',
            'fecha_inicio' => Carbon::now()->toDateString(),
            'id_tipo' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home');
    }
}

