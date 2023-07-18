<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::with('laundry', 'user')->get();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsUser = User::all();
        $rowLaundry = Laundry::all();
        return view('pelanggan.create', compact('rowLaundry', 'rowsUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'pel_id_pro' => $request->pel_id_pro,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_id_user' => $request->pel_id_user,
        ]);

        return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        $rowUser = User::findOrFail($row->pel_id_pro);
        $rowLaundry = Laundry::findOrFail($row->pel_id_pro);
        return view('pelanggan.edit', compact('row', 'rowUser', 'rowLaundry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update([
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
