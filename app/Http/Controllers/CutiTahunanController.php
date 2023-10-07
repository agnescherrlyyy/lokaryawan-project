<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutiTahunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Cuti';
        $subtitle = 'Cuti Tahunan';
        return view('cuti.cutitahunan', 
            [
                'title' => $title,
                'subtitle' => $subtitle
            ],
        );
    }

    public function permintaanCuti()
    {   
        $title = 'Cuti Tahunan';
        $subtitle = 'Permintaan Cuti';
        return view('cuti.permintaancuti',
            [
                'title' => $title,
                'subtitle' => $subtitle
            ]
        );
    }

    public function riwayatCuti()
    {
        $title = 'Cuti Tahunan';
        $subtitle = 'Riwayat Cuti';
        return view('cuti.riwayatcuti',
            [
                'title' => $title,
                'subtitle' => $subtitle
            ]
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
