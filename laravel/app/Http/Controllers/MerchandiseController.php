<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function index() {
        $merchandise = Merchandise::get();

        return view('merchandises.index', ['merchandises' => $merchandise]);
    }

    public function create()
    {
        return view('merchandises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  $table->id();
        //     $table->string('brand');
        //     $table->string('description');
        //     $table->decimal('retail_price', 10, 2);
        //     $table->decimal('whole_sale_price', 10, 2);
        //     $table->integer('whole_sale_qty');
        //     $table->integer('qty_stock');
        $request -> validate([
            'id' => 'required|numeric',
            'brand' => 'required',
            'description' => 'required',
            'retail_price' => 'required|decimal',
            'whole_sale_price' => 'required|decimal',
            'whole_sale_qty' => 'required|numeric',
            'qty_stock' => 'required|numeric',
        ]);

        Merchandise::create([
            'id' => $request->id,
            'brand' => $request->brand,
            'description' => $request->description,
            'retail_price' => $request->retail_price,
            'whole_sale_price' => $request->whole_sale_price,
            'whole_sale_qty' => $request->whole_sale_qty,
            'qty_stock' => $request->qty_stock
        ]);

        return redirect('/merchandises')->with('message', 'A new merchandise has been added');
    }

    public function edit(Merchandise $merchandise)
    {
        return view('merchandises.edit', compact('merchandise'));
    }

    public function update(Merchandise $merchandise, Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'brand' => 'required',
            'description' => 'required',
            'retail_price' => 'required|decimal',
            'whole_sale_price' => 'required|decimal',
            'whole_sale_qty' => 'required|numeric',
            'qty_stock' => 'required|numeric',
        ]);

        $merchandise->update($request->all());
        return redirect('/merchandises')->with('message', "$merchandise->id has been updated.");
    }
}
