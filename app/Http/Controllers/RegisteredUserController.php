<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create_signup()
    {
        return view('authentication.signup');
    }

    public function store(Request $request)
    {
        // dd($request->password);
        // Validate the input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'role' => 'user',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($user);

        // Log in the user
        Auth::login($user);

        // Redirect to dashboard
        return redirect()->intended('/dashboard');
    }

    public function user_save(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'ph_no' => ['required', 'digits_between:10,15'],
            'role' => 'user', // default role
        ]);

        $lastUser = User::orderBy('id', 'desc')->first();
        $update_id = $lastUser->id + 1;
        // dd($request->hasFile('user_sign'));

        if ($request->hasFile('user_sign')) {
            $file = $request->file('user_sign');
            $filename = time() . '_' . $update_id . '.webp';
            $file->move(public_path('uploads/signatures'), $filename);
        }

        // dd($filename);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'ph_no' => $request->ph_no,
            'role' => 'user',
            'password' => Hash::make($request->password),
            'signature' => $filename,
            'status' => '1',
        ]);

        // dd($user);

        // Redirect to dashboard
        return redirect()->back();
    }
}
