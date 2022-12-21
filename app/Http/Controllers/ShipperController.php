<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function get_all()
    {
        // get shippers and primary contacts
        $shippers = Shipper::with(['contacts' => function($query) {
            $query->where('primary',1);
        }])
        ->orderBy('id', 'DESC')
        ->get();

        return $shippers;
    }

    public function new(Request $request)
    {
        $data = $request->all();

        $name = $data['shipper']['name'];
        $address = $data['shipper']['address'];

        $shipper = new Shipper();
        $shipper->name = $name;
        $shipper->address = $address;
        $shipper->save();

        return response()->json(['success' => true, 'message' => 'Shipper created successfully']);
    }


}
