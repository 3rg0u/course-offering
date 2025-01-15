<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormSignIn()
    {
        return view("auth.signin");
    }
    public function handleSignIn()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isProfessor()) {
                return redirect()->route('professor.dashboard');
            }
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors([
            'email' => 'Password or email is incorrect!',
        ])->onlyInput('email');
    }

    public function handleSignOut()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
