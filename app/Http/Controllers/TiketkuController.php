<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Komplemen';
        $subtitle = 'Tiket';
        return view('komplemen.tiketku',
            [
                'title' => $title,
                'subtitle' => $subtitle
            ],
        );
    }

    public function pengajuanKomplemen(Request $request)
    {
        $title = 'Komplemen';
        $subtitle = 'Pengajuan Komplemen';
        return view('komplemen.list-komplemen',
            [
                'title' => $title,
                'subtitle' => $subtitle,
                'request' => $request->all()
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
