<?php

namespace App\Http\Controllers;

use App\Tbdiagnosa;
use Illuminate\Http\Request;

class TbdiagnosasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbdiagnosa = Tbdiagnosa::all();
        return view('tbdiagnosa.index', compact('tbdiagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbdiagnosa.create');
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
            'kddiagnosa' => 'required|size:4',
            'nmdiagnosa' => 'required',
            'kdgejala' => 'required',
            'nmgejala' => 'required',
            'kdkerusakan' => 'required',
            'nmkerusakan' => 'required'
        ]);

        tbdiagnosa::create($request->all());

        return redirect('/tbdiagnosa')->with('status', 'Data diagnosa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbdiagnosa  $tbdiagnosa
     * @return \Illuminate\Http\Response
     */
    public function show(Tbdiagnosa $tbdiagnosa)
    {
        return view('tbdiagnosa.index', compact('tbdiagnosa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbdiagnosa  $tbdiagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbdiagnosa $tbdiagnosa)
    {
        return view('tbdiagnosa.edit', compact('tbdiagnosa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbdiagnosa  $tbdiagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbdiagnosa $tbdiagnosa)
    {
        $request->validate([
            'kddiagnosa' => 'required|size:4',
            'nmdiagnosa' => 'required',
            'kdgejala' => 'required',
            'nmgejala' => 'required',
            'kdkerusakan' => 'required',
            'nmkerusakan' => 'required'
        ]);
        tbdiagnosa::where('id', $tbdiagnosa->id)
            ->update([
                'kddiagnosa' => $request->kddiagnosa,
                'nmdiagnosa' => $request->nmdiagnosa,
                'kdgejala' => $request->kdgejala,
                'nmgejala' => $request->nmgejala,
                'kdkerusakan' => $request->kdkerusakan,
                'nmkerusakan' => $request->nmkerusakan
            ]);
        return redirect('/tbdiagnosa')->with('status', 'Data diagnosa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbdiagnosa  $tbdiagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbdiagnosa $tbdiagnosa)
    {
        tbdiagnosa::destroy($tbdiagnosa->id);
        return redirect('/tbdiagnosa')->with('status', 'Data diagnosa berhasil dihapus');
    }
}
