<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard');
    }

    public function create()
    {
        return view('user_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        try {
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            return redirect()->route('dashboard')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Please try again with another email']);
        }
    }
}