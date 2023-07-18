<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Laundry::all();
        return view('laundry.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laundry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Laundry::create([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('laundry');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Laundry::findOrFail($id);
        return view('laundry.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Laundry::findOrFail($id);
        $row->update([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('laundry');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Laundry::findOrFail($id);
        $row->delete();

        return redirect('laundry');
    }
}
