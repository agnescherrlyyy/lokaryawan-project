<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class SlipThRPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function generatePDF(Request $request)
    {
        $decrypted = Crypt::decryptString($request->key);
        $periode = $request->id_periode;
        $url     = "http://192.168.0.75:8099/api/thrku?id_karyawan=".$request->id_karyawan."&password=".$decrypted."&id_periode=".$request->id_periode."&nip=".$request->nip;
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->post($url);
        $response = $request->getBody()->getContents();
        $thrkaryawan = json_decode($response);

        $detail_karyawan =  $thrkaryawan->thrku->karyawan;
        $detail_thrku = $thrkaryawan->thrku->karyawan_thr;

        $data = ['title' => 'Generated by System', 'detail_karyawan' => $detail_karyawan, 'detail_thrku' => $detail_thrku];
        $pdf = PDF::loadView('gaji.thr.slip-thr', $data)->setPaper([0, 0, 612, 936]);

        return $pdf->download('Slip THR '.$detail_karyawan->nama.'.pdf');
    }

    public function encryptPassword(Request $request){
        $passwordK = $request->passwordK;
        $encryptedData = Crypt::encryptString($passwordK);

        return response()->json($encryptedData);
    }
    public function index()
    {
        //
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
