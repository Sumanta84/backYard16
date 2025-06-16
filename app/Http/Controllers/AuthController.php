<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function create_login()
    {
        return view('authentication.signin');
    }


    public function store(Request $request)
    {
        // Validate user input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);

        // $user = User::where('email', $request->email)->first();

        // First, check if the user exists and status is active/public/uploads/signatures
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return back()->withErrors([
                'email' => 'No account found with this email.',
            ]);
        }

        if ($user->status != 1) {
            return back()->withErrors([
                'email' => 'Your account is inactive. Please contact support.',
            ]);
        }

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // Log in the user manually
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log the user out.
     */
    public function destroy(Request $request)
    {

        // dd('hi');
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
