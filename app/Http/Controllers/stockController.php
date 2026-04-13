<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class stockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();

        return view('stock', compact('stocks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => ['required', 'string', 'max:100'],
            'quantity' => ['required', 'integer', 'min:0'],
        ]);

        Stock::create($validated);

        return redirect()->route('stock');
    }
}
