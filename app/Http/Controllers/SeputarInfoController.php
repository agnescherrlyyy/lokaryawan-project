<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeputarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $title = 'Seputar Info';
        return view('seputar-info.info-list',
            [
                'title' => $title,
            ]
        );
    }


    public function detailList()
    {   
        $title = 'Detail Info';
        return view('seputar-info.detail-info',
            [
                'title' => $title,
            ]
        );
    }

    public function manualbook()
    {
        $title = 'Manual Book';
        $subtitle = 'Manual Book';
        return view('seputar-info.manual-book', 
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
