<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function update(Request $request, Purchase $purchase){
        $fields = $request->validate([
            'date' => 'required|date',
            'supplier_id' => 'required|numeric',
            'total' => 'required|decimal',
            'user_id' => 'required|numeric',
        ]);

        $purchase->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $purchase->id . 'has been updated.'
        ]);

    }

    public function store(Request $request, purchase $purchase){
        $fields = $request->validate([
            'date' => 'required|date',
            'supplier_id' => 'required|numeric',
            'total' => 'required|decimal',
            'user_id' => 'required|numeric',
        ]);

        $fields['date'] = $request->filled('date') ? $request->input('date') : null;

        $purchase = $purchase->create($fields);



        return response()->json([
            'status' => 'OK',
            'purchase' => $purchase,
            'message' => 'purchase with ID#' . $purchase->id . 'has been updated.'
        ]);

    }

    public function destroy(Purchase $purchase) {
        $details = $purchase->name;
        $purchase->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The purchase $details has been deleted."
        ]);
    }

    public function index() {
        $purchase = Purchase::orderBy('id')->get();

        return response()->json($purchase);
    }

    public function view(Purchase $purchase) {

        return response()->json($purchase);
    }
}
