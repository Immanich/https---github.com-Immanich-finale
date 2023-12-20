<?php

namespace App\Http\Controllers;

use App\Models\PurchasedItem;
use Illuminate\Http\Request;

class PurchasedItemController extends Controller
{
    public function update(Request $request, PurchasedItem $purchasedItem){
        $fields = $request->validate([
            'merchandise_id' => 'required|numeric',
            'purchase_id' => 'required|numeric',
            'whole_sale_qty' => 'required|numeric',
            'purchase_price' => 'required|numeric',
        ]);

        $purchasedItem->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Purchase with an ID # of ' . $purchasedItem->id . ' has been updated.'
        ]);

    }

    public function store(Request $request, PurchasedItem $purchasedItem){
        $fields = $request->validate([
            'merchandise_id' => 'required|numeric',
            'purchase_id' => 'required|numeric',
            'whole_sale_qty' => 'required|numeric',
            'purchase_price' => 'required|numeric',
        ]);

        $fields['merchandise_id'] = $request->filled('merchandise_id') ? $request->input('merchandise_id') : null;

        $purchasedItem = $purchasedItem->create($fields);



        return response()->json([
            'status' => 'OK',
            'purchasedItem' => $purchasedItem,
            'message' => 'Purchased item with an ID # of ' . $purchasedItem->id . ' has been updated.'
        ]);

    }

    public function destroy(PurchasedItem $purchasedItem) {
        $details = $purchasedItem->name;
        $purchasedItem->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The purchased item $details has been deleted."
        ]);
    }

    public function index() {
        $purchasedItem = PurchasedItem::orderBy('id')->get();

        return response()->json($purchasedItem);
    }

    public function view(PurchasedItem $purchasedItem) {

        return response()->json($purchasedItem);
    }
}
