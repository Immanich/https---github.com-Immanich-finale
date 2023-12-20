<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function update(Request $request, Merchandise $merchandise){
        $fields = $request->validate([
            'brand' => 'required|string',
            'description' => 'required|string',
            'retail_price' => 'required|decimal',
            'whole_sale_price' => 'required|decimal',
            'whole_sale_qty' => 'required|integer',
            'qty_stock' => 'required|integer'
        ]);

        $merchandise->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Merchandise with ID# ' . $merchandise->id . ' has been updated.'
        ]);

    }

    public function store(Request $request, Merchandise $merchandise){
        $fields = $request->validate([
            'brand'             => 'required|string',
            'description'       => 'required|string',
            'retail_price'      => 'required|numeric',
            'whole_sale_price'  => 'required|numeric',
            'whole_sale_qty'    => 'required|numeric',
            'qty_stock'         =>'required|numeric'
        ]);

        $fields['brand'] = $request->filled('description') ? $request->input('description') : null;

        $merchandise = $merchandise->create($fields);



        return response()->json([
            'status' => 'OK',
            'customer' => $merchandise,
            'message' => 'Merchandise with ID#' . $merchandise->id . 'has been updated.'
        ]);

    }

    public function destroy(Merchandise $merchandise) {
        $details = $merchandise->brand;
        $merchandise->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The user $details has been deleted."
        ]);
    }

    public function index() {
        $merchandise = Merchandise::orderBy('brand')->get();

        return response()->json($merchandise);
    }

    public function view(Merchandise $merchandise) {

        return response()->json($merchandise);
    }
}
