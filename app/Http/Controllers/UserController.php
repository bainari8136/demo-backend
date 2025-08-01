<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
           $validated=$request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);

            // Assuming you have a User model
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
            ]); 

            $applicant=Role::create([
                'name'=>'applicant',
                'description'=>'applicant role'
            ]);

            $user->roles()->attach($applicant->id);

            return response()->json([
                'status'=> true,
                'message' => 'User registered successfully',
                'user' => $user
            ], 201);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            $user=auth()->user();
            $roleStatus=$user->roles()->where('name', 'applicant')->exists();
            return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'role'=>$user->roles()->pluck('name')], 200,);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
