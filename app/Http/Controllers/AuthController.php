<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password])) {
            return response()->json(['success' => true, 'message' => 'Login Berhasil'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Username atau password salah'], 401);
        }
    }

    public function start_session(Request $request)
    {
        session([
                'username' => $request->username,
                'name' => $request->name,
                'already_login' => true
            ]);
        return redirect('dashboard');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/')->with('message', 'Logout Berhasil');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
