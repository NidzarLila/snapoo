<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use PDF;


class InvoiceController extends Controller
{
    public function show($id_reservasi)
    {
        $reservation = Reservasi::findOrFail($id_reservasi);
        return view('invoice.show', compact('reservation'));
    }
    public function download($id_reservasi)
    {
        $reservation = Reservasi::findOrFail($id_reservasi);
        $pdf = PDF::loadView('invoice.pdf', compact('reservation'));
        return $pdf->stream('invoice-' . $reservation->order_id . '.pdf');
    }
}
