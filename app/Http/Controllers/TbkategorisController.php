<?php

namespace App\Http\Controllers;

use App\Tbkategori;
use Illuminate\Http\Request;

class TbkategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbkategori = Tbkategori::all();
        return view('tbkategori.index', compact('tbkategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbkategori.create');
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
            'kdkategori' => 'required|size:4',
            'nmkategori' => 'required',
            'keterangan' => 'required'
            
        ]);

        tbkategori::create($request->all());

        return redirect('/tbkategori')->with('status', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbkategori  $tbkategori
     * @return \Illuminate\Http\Response
     */
    public function show(Tbkategori $tbkategori)
    {
        return view('tbkategori.index', compact('tbkategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbkategori  $tbkategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbkategori $tbkategori)
    {
        return view('tbkategori.edit', compact('tbkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbkategori  $tbkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbkategori $tbkategori)
    {
        $request->validate([
            'kdkategori' => 'required|size:4',
            'nmkategori' => 'required',
            'keterangan' => 'required'
        ]);
        tbkategori::where('id', $tbkategori->id)
            ->update([
                'kdkategori' => $request->kdkategori,
                'nmkategori' => $request->nmkategori,
                'keterangan' => $request->keterangan
                
            ]);
        return redirect('/tbkategori')->with('status', 'Data kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbkategori  $tbkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbkategori $tbkategori)
    {
        tbkategori::destroy($tbkategori->id);
        return redirect('/tbkategori')->with('status', 'Data kategori berhasil dihapus');
    }
}