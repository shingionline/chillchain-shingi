<?php

namespace App\Http\Controllers;

use App\Models\Shipper;

class ShipperController extends Controller
{
    public function get_all()
    {
        $shippers = Shipper::orderBy('id', 'DESC')->get();

        return $shippers;
    }
}
