<?php

namespace App\Http\Controllers;

use App\Tbkerusakan;
use Illuminate\Http\Request;

class TbkerusakansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbkerusakan = Tbkerusakan::all();
        return view('tbkerusakan.index', compact('tbkerusakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbkerusakan.create');
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
            'kdkerusakan' => 'required|size:4',
            'nmkerusakan' => 'required',
            'kdkategori' => 'required',
            'nmkategori' => 'required',
            'keterangan' => 'required'
            
        ]);

        tbkerusakan::create($request->all());

        return redirect('/tbkerusakan')->with('status', 'Data kerusakan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbkerusakan  $tbkerusakan
     * @return \Illuminate\Http\Response
     */
    public function show(Tbkerusakan $tbkerusakan)
    {
        return view('tbkerusakan.index', compact('tbkerusakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbkerusakan  $tbkerusakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbkerusakan $tbkerusakan)
    {
        return view('tbkerusakan.edit', compact('tbkerusakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbkerusakan  $tbkerusakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbkerusakan $tbkerusakan)
    {
        $request->validate([
            'kdkerusakan' => 'required|size:4',
            'nmkerusakan' => 'required',
            'kdkategori' => 'required',
            'nmkategori' => 'required',
            'keterangan' => 'required'
        ]);
        tbkerusakan::where('id', $tbkerusakan->id)
            ->update([
                'kdkerusakan' => $request->kdkerusakan,
                'nmkerusakan' => $request->nmkerusakan,
                'kdkategori' => $request->kdkategori,
                'nmkategori' => $request->nmkategori,
                'keterangan' => $request->keterangan
                
            ]);
        return redirect('/tbkerusakan')->with('status', 'Data kerusakan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbkerusakan  $tbkerusakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbkerusakan $tbkerusakan)
    {
        tbkerusakan::destroy($tbkerusakan->id);
        return redirect('/tbkerusakan')->with('status', 'Data kerusakan berhasil dihapus');
    }
}