<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'tanggal_transaksi' => 'required',
            'kode_barang' => 'required',
            'kode_pelanggan' => 'required',
            'total_belanja' => 'required',
            'total' => 'required',
        ]);

        $datatransaksi = ([
            'kode_transaksi' => $request->kode_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'kode_barang' => $request->kode_barang,
            'kode_pelanggan' => $request->kode_pelanggan,
            'total_belanja' => $request->total_belanja,
        ]);

        $datadetail = [
            'kode_transaksi' => $request->kode_transaksi,
            'kode_barang' => $request->kode_barang,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ];

        DB::table('transaksi')->insert($data);
        DB::table('detail_transaksi')->insert($data);
        return redirect()->view('transaksi.index')->with('success', 'Data berhasil disimpan');
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
        DB::table('transaksi')->where('kode_transaksi', $id)->delete();
        return redirect()->view('transaksi.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('transaksi')->where('kode_transaksi', $id)->delete();
        return redirect()->view('transaksi.index');
    }
}
