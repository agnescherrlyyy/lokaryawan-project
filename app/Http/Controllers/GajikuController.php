<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class GajikuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $url     = 'http://103.164.114.22:8096/api/get_periode';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $periodes = json_decode($response)->periode;
        $periode_now = collect($periodes)->where('tgl_awal', '<=', date('Y-m-d'))->where('tgl_akhir', '>=', date('Y-m-d'))->first();
        
        $title = 'Penggajian';
        $subtitle = 'Gajiku';
        return view('gaji.gajiku',
            [
                'title' => $title,
                'subtitle' => $subtitle,
                'periodes' => $periodes,
                'periode_now' => $periode_now,
            ]
        );
    }
    
    public function get_gajiku(Request $request){
        $url = "http://103.164.114.22:8096/api/gajiku?username=".$request->username."&password=".$request->password."&id_periode=".$request->id_periode."&id_karyawan=".$request->id_karyawan;
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->post($url);
        $response = $request->getBody()->getContents();
        $gaji = json_decode($response);
        
        return response()->json($gaji);
    }

    // public function generatePDF(Request $request)
    // {
    //     try {
    //         $dataAPI = $request->input('dataAPI');
    //         // dd($dataAPI);
    //         return response()->json(['status' => 'success', 'data' => $dataAPI]);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }
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
