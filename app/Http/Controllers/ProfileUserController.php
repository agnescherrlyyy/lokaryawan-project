<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $title = 'Profile User';
        return view('profile.profile-user',
            [
                'title' => $title,
            ]
        );
    }

    // public function post_pin(Request $request){
    //     $url = "http://103.164.114.22:8096/api/edit_password?id_karyawan=".$request->id_karyawan."&no_hp=".$request->no_wa;
    //     // $url = "http://103.164.114.22:8096/api/edit_password";
    //     $client = new \GuzzleHttp\Client(['verify' => false]);
    //     $request = $client->post($url);
    //     $response = $request->getBody()->getContents();
    //     $status = json_decode($response);

    //     return response()->json($status);
    // }

    public function post_pin(Request $request){
        $url = "http://103.164.114.22:8096/api/edit_password";
        $data = $request->all();
        $client = new Client();
    
        try {
            $response = $client->post($url, [
                'verify' => false,
                'json' => $data,
            ]);
            $status = json_decode($response->getBody()->getContents(), true);
    
            return response()->json($status);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
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
