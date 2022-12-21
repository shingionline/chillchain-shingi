<?php

namespace App\Http\Controllers;

use App\Models\Shipper;

class ShipperController extends Controller
{
    public function get_all()
    {
        // get shippers and primary contacts
        $shippers = Shipper::with(['contacts' => function($query) {
            $query->where('primary',1);
        }])->get();

        return $shippers;
    }


}
