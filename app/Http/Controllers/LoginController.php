<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function validar(LoginRequest $request, Redirector $redirect)
    {

        //$input = $request->only(['username', 'password']);
        $credencial = $request->validated();
        $remember = $request->filled('savesession');
        if (Auth::attempt($credencial, $remember)) {
            $request->session()->regenerate();

            return $redirect
                ->intended('dashboard')
                ->with('info', 'Incio de sesión exitoso');
        } else {
            return redirect()->route('login')->with('info', 'Credencial Incorrecto');
        }
    }

    public function index()
    {
        return view('login.login');
    }

    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return  redirect('/')->with('info', 'La sesión se cerro con éxito');
    }
}
