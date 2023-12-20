<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function update(Request $request, Supplier $supplier){
        $fields = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'contact_person' => 'required|string',
        ]);

        $supplier->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Supplier with ID# ' . $supplier->id . ' has been updated.'
        ]);

    }

    public function store(Request $request, Supplier $supplier){
        $fields = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'contact_person' => 'required|string',
        ]);

        $fields['company_name'] = $request->filled('company_name') ? $request->input('company_name') : null;

        $supplier = $supplier->create($fields);



        return response()->json([
            'status' => 'OK',
            'supplier' => $supplier,
            'message' => 'Supplier with ID# ' . $supplier->id . ' has been updated.'
        ]);

    }

    public function destroy(Supplier $supplier) {
        $details = $supplier->name;
        $supplier->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The supplier $details has been deleted."
        ]);
    }

    public function index() {
        $suppliers = Supplier::orderBy('company_name')->get();

        return response()->json($suppliers);
    }

    public function view(Supplier $supplier) {

        return response()->json($supplier);
    }
}
