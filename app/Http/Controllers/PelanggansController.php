<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class PelanggansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'qrcode' => 'required'
        ]);

        pelanggan::create($request->all());

        return redirect('/pelanggan')->with('status', 'Data Pelanggan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'qrcode' => 'required'
        ]);
        pelanggan::where('id', $pelanggan->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'checkin' => $request->checkin,
                'checkout' => $request->checkout,
                'qrcode' => $request->qrcode
            ]);
        return redirect('/pelanggan')->with('status', 'Data Pelanggan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        pelanggan::destroy($pelanggan->id);
        return redirect('/pelanggan')->with('status', 'Data pelanggan berhasil dihapus');
    }
}
