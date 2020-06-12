<?php

namespace App\Http\Controllers;

use App\Tbsolusi;
use Illuminate\Http\Request;

class TbsolusisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbsolusi = Tbsolusi::all();
        return view('tbsolusi.index', compact('tbsolusi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbsolusi.create');
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
            'kdsolusi' => 'required|size:4',
            'solusi' => 'required',
            'kddiagnosa' => 'required',
            'nmdiagnosa' => 'required',
            'keterangan' => 'required'
            
        ]);

        tbsolusi::create($request->all());

        return redirect('/tbsolusi')->with('status', 'Data solusi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbsolusi  $tbsolusi
     * @return \Illuminate\Http\Response
     */
    public function show(Tbsolusi $tbsolusi)
    {
        return view('tbsolusi.index', compact('tbsolusi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbsolusi  $tbsolusi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbsolusi $tbsolusi)
    {
        return view('tbsolusi.edit', compact('tbsolusi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbsolusi  $tbsolusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbsolusi $tbsolusi)
    {
        $request->validate([
            'kdsolusi' => 'required|size:4',
            'solusi' => 'required',
            'kddiagnosa' => 'required',
            'nmdiagnosa' => 'required',
            'keterangan' => 'required'
        ]);
        tbsolusi::where('id', $tbsolusi->id)
            ->update([
                'kdsolusi' => $request->kdsolusi,
                'solusi' => $request->solusi,
                'kddiagnosa' => $request->kddiagnosa,
                'nmdiagnosa' => $request->nmdiagnosa,
                'keterangan' => $request->keterangan
                
            ]);
        return redirect('/tbsolusi')->with('status', 'Data solusi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbsolusi  $tbsolusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbsolusi $tbsolusi)
    {
        tbsolusi::destroy($tbsolusi->id);
        return redirect('/tbsolusi')->with('status', 'Data solusi berhasil dihapus');
    }
}