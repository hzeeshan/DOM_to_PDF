<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index() {

    	$data = ['name1' => 'Zeeshan', 'name2' => 'Hafiz', 'name3' => 'Riaz'];
    	return view('invoice', compact('data'));
    }

    public function export() {

    	$data = ['name1' => 'Zeeshan', 'name2' => 'Hafiz', 'name3' => 'Riaz'];
    	$pdf = PDF::loadView('export', compact('data'));
		//return view('invoice');
		return $pdf->download('invoice.pdf');
    }
}
