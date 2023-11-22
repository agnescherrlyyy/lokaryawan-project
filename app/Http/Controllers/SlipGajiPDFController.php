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
        $url     = "http://103.164.114.22:8096/api/gajiku?username=".$request->username."&password=".$decrypted."&id_periode=".$request->periode."&id_karyawan=".$request->karyawan;
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->post($url);
        $response = $request->getBody()->getContents();
        $karyawan = json_decode($response);
        
        $detail_karyawan = $karyawan->gajiku->karyawan;
        $absensi_karyawan = $karyawan->gajiku->kehadiran_karyawan;
        $detail_gaji = $karyawan->gajiku->karyawan_gaji;

        $data = ['title' => 'My PDF', 'detail_karyawan' => $detail_karyawan, 'absensi_karyawan' => $absensi_karyawan, 'detail_gaji' => $detail_gaji];
        
        $pdf = PDF::loadView('gaji.slip-gaji', $data)->setPaper([0, 0, 612, 936]);
        
        return $pdf->download('Slip Gaji '.$detail_karyawan->nama.'.pdf');
    }

    public function encryptPassword(Request $request){
        $passwordK = $request->passwordK;
        $encryptedData = Crypt::encryptString($passwordK);

        return response()->json($encryptedData);
    }
}