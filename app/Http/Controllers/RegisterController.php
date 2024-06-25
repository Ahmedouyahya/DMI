<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);

        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['role'] = 'user'; // Set default role to 'user'

        // Remove 'agreement' as it's not needed for User creation
        unset($attributes['agreement']);

        // Create the user
        $user = User::create($attributes);

        // Login the user
        Auth::login($user);

        // Flash success message
        session()->flash('success', 'Your account has been created.');

        // Redirect to dashboard
        return redirect('/dashboard');
    }
}
