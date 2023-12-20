<?php

namespace App\Http\Controllers;

use App\Models\SoldItem;
use Illuminate\Http\Request;

class SoldItemController extends Controller
{
    public function update(Request $request, SoldItem $soldItem){
        $fields = $request->validate([
            'merchandise_id' => 'required|numeric',
            'sale_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'selling_price' => 'numeric|decimal',
        ]);

        $soldItem->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Sold item with ID# ' . $soldItem->id . ' has been updated.'
        ]);

    }

    public function store(Request $request, SoldItem $soldItem){
        $fields = $request->validate([
            'merchandise_id' => 'required|numeric',
            'sale_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'selling_price' => 'required|decimal',
        ]);

        $fields['sale_id'] = $request->filled('sale_id') ? $request->input('sale_id') : null;

        $soldItem = $soldItem->create($fields);



        return response()->json([
            'status' => 'OK',
            'SoldItem' => $soldItem,
            'message' => 'Sold item with ID# ' . $soldItem->id . ' has been updated.'
        ]);

    }

    public function destroy(SoldItem $soldItem) {
        $details = $soldItem->name;
        $soldItem->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The sold item $details has been deleted."
        ]);
    }

    public function index() {
        $soldItem = SoldItem::orderBy('id')->get();

        return response()->json($soldItem);
    }

    public function view(SoldItem $soldItem) {

        return response()->json($soldItem);
    }
}
