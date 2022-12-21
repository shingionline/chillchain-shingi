<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function get_single($id)
    {
        $shipper = Shipper::find($id);

        return $shipper;
    }

    public function get_all()
    {
        // get all shippers with their primary contact
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

    public function update(Request $request)
    {
        $data = $request->all();

        $id = $data['shipper']['id'];
        $name = $data['shipper']['name'];
        $address = $data['shipper']['address'];

        $shipper = Shipper::find($id);
        $shipper->name = $name;
        $shipper->address = $address;
        $shipper->save();

        return response()->json(['success' => true, 'message' => 'Shipper updated successfully']);
    }

    public function delete($id)
    {
        // delete the shipper
        $shipper = Shipper::find($id);
        $shipper->delete();

        // delete all contacts associated with this shipper
        $shipper->contacts()->delete();

        return response()->json(['success' => true, 'message' => 'Shipper deleted successfully']);
    }


}
