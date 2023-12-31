<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
        return view('authentication.register');
    }
    public function loginshow()
    {
        return view('authentication.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        User::create($data);
        echo "registered\n";
        return;
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $hashedPassword = $user->password;
        if (!$user || !Hash::check($request->password, $user->password)) {
            echo "Invalid credentials";
            return;
        } else {
            return view("admin.admindash");
        }

    }

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