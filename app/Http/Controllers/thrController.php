<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $url     = 'http://103.164.114.22:8096/api/get_periode_thr';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $periodes = json_decode($response)->periode;

        $title = 'Penggajian';
        $subtitle = 'Thrku';
        return view('gaji.thr.thr-index', [
            'title' => $title,
            'subtitle' => $subtitle,
            'periodes' => $periodes,
        ]);
    }

    public function get_thrku(Request $request){
        $url = "http://192.168.0.75:8099/api/thrku?id_karyawan=".$request->id_karyawan."&password=".$request->password."&id_periode=".$request->id_periode."&nip=".$request->nip;
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->post($url);
        $response = $request->getBody()->getContents();
        $thrku = json_decode($response);
        
        return response()->json($thrku);
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
