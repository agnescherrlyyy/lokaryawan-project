<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutiKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $url     = 'https://servicelokaryawan.salokapark.app/api/get_master_cuti';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $master_data = json_decode($response)->data;

        $title = 'Cuti';
        $subtitle = 'Cuti Khusus';

        $tipe_cuti = [];
        foreach ($master_data as $entry) {
            if ($entry->tipe_cuti === "CK") {
                $tipe_cuti[] = $entry;
            }
        }
        return view('cuti.reqcutikhusus', 
            [
                'title' => $title,
                'subtitle' => $subtitle,
                'master_data' => $master_data,
                'tipe_cuti' => $tipe_cuti,
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
