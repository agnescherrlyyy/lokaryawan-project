<?php

namespace App\Http\Controllers;

use App\Models\Jadwalku;
use Illuminate\Http\Request;

class JadwalkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $url     = 'https://lokahr.salokapark.app/api/get_periode';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $periodes = json_decode($response)->periode;
        $periode_now = collect($periodes)->where('tgl_awal', '<=', date('Y-m-d'))->where('tgl_akhir', '>=', date('Y-m-d'))->first();
        
        $title = 'Jadwal';
        $subtitle = 'Jadwalku';
        return view('jadwal.jadwalku', 
            [
                'title' => $title,
                'subtitle' => $subtitle,
                'periodes' => $periodes,
                'periode_now' => $periode_now,
            ],
        );
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
