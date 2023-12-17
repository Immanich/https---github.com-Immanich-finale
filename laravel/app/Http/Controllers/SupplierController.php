<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::get();

        return view('suppliers.index', ['suppliers' => $supplier]);
    }

    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'company_name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'contact_person' => 'required',
        ]);

        Supplier::create([
            'id' => $request->id,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'contact_person' => $request->contact_person,
        ]);

        return redirect('/suppliers')->with('message', 'A new supplier has been added');
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Supplier $supplier, Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'company_name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'contact_person' => 'required',
        ]);

        $supplier->update($request->all());
        return redirect('/suppliers')->with('message', "$supplier->id has been updated.");
    }
}
