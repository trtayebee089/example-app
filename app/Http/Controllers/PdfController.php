<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function getPdf(Request $request){
        $data = [
            'name' => 'বাংলা নাম',
            'age' => "৩০",
        ];
        $pdf = \PDF::loadView('container', compact('data'));
        return $pdf->download('TEST-FILE.pdf');
    }
}
