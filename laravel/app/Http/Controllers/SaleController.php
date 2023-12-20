<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function update(Request $request, Sale $sale){
        $fields = $request->validate([
            'customer_id' => 'required|numeric',
            'date' => 'required|date',
            'is_credit' => 'required|boolean',
            'user_id' => 'required|numeric',
        ]);

        $sale->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $sale->id . 'has been updated.'
        ]);

    }

    public function store(Request $request, Sale $sale){
        $fields = $request->validate([
            'customer_id' => 'required|numeric',
            'date' => 'required|date',
            'is_credit' => 'required|boolean',
            'user_id' => 'required|numeric',
        ]);

        $fields['user_id'] = $request->filled('user_id') ? $request->input('user_id') : null;

        $sale = $sale->create($fields);



        return response()->json([
            'status' => 'OK',
            'Sale' => $sale,
            'message' => 'Sale with ID#' . $sale->id . 'has been updated.'
        ]);

    }

    public function destroy(Sale $sale) {
        $details = $sale->name;
        $sale->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The Sale $details has been deleted."
        ]);
    }

    public function index() {
        $sale = Sale::orderBy('id')->get();

        return response()->json($sale);
    }

    public function view(Sale $sale) {

        return response()->json($sale);
    }
}
