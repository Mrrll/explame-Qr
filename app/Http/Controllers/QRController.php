<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public function generarQR()
    {
        // Generar el QR y devolverlo en una vista
        $qrCode = QrCode::size(200)->generate('Hola desde Laravel 10');
        return view('qr', compact('qrCode'));
    }
}
