<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('supplier', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplier_name' => ['required', 'string', 'max:100'],
            'contact_number' => ['required', 'string', 'max:20'],
        ]);

        Supplier::create($validated);

        return redirect()->route('supplier');
    }
}
