<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SlipGajiPDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'My PDF'];
        $pdf = PDF::loadView('gaji.slip-gaji', $data)->setPaper([0, 0, 612, 936]);
        return $pdf->download('my-pdf.pdf');
        // return view('gaji.slip-gaji', $data);
    }
}