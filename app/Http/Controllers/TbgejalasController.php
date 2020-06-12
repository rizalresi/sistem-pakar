<?php

namespace App\Http\Controllers;

use App\Tbgejala;
use Illuminate\Http\Request;

class TbgejalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbgejala = Tbgejala::all();
        return view('tbgejala.index', compact('tbgejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbgejala.create');
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
            'kdgejala' => 'required|size:4',
            'nmgejala' => 'required',
            'keterangan' => 'required'
            
        ]);

        tbgejala::create($request->all());

        return redirect('/tbgejala')->with('status', 'Data gejala berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbgejala  $tbgejala
     * @return \Illuminate\Http\Response
     */
    public function show(Tbgejala $tbgejala)
    {
        return view('tbgejala.index', compact('tbgejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbgejala  $tbgejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbgejala $tbgejala)
    {
        return view('tbgejala.edit', compact('tbgejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbgejala  $tbgejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbgejala $tbgejala)
    {
        $request->validate([
            'kdgejala' => 'required|size:4',
            'nmgejala' => 'required',
            'keterangan' => 'required'
            
        ]);
        tbgejala::where('id', $tbgejala->id)
            ->update([
                'kdgejala' => $request->kdgejala,
                'nmgejala' => $request->nmgejala,
                'keterangan' => $request->keterangan
                
            ]);
        return redirect('/tbgejala')->with('status', 'Data gejala berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbgejala  $tbgejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbgejala $tbgejala)
    {
        tbgejala::destroy($tbgejala->id);
        return redirect('/tbgejala')->with('status', 'Data gejala berhasil dihapus');
    }
}