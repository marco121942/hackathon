<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class testPDF extends Controller
{
    //
    public function test(){

        $pdf = PDF::loadView('pdf.test');
        return $pdf->stream();

    }
}
