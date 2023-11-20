<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class SlipGajiPDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $decrypted = Crypt::decryptString($request->key);
        $url     = env('APP_API')."get_karyawan_byID?id_karyawan=".$request->username;
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $karyawan = json_decode($response)->data;
        $karyawan = $karyawan[0];

        $data = ['title' => 'My PDF', 'karyawan' => $karyawan];
        
        $pdf = PDF::loadView('gaji.slip-gaji', $data)->setPaper([0, 0, 612, 936]);
        
        return $pdf->stream('Slip Gaji '.$karyawan->name.'.pdf');
    }

    public function encryptPassword(Request $request){
        $passwordK = $request->passwordK;
        $encryptedData = Crypt::encryptString($passwordK);

        return response()->json($encryptedData);
    }

}