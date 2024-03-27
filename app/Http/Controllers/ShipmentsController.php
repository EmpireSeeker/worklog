<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentsController extends Controller
{
    public function track($tracking_number)
    {
        $shipment = Shipment::where('tracking_number', $trackingNumber)->first();

        if (!$shipment) {
            return response()->json(['error' => 'Shipment not found.'], 404);
        }

        return view('shipment.track', ['shipment' => $shipment]);
    }
}
