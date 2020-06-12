<?php

namespace App\Http\Controllers;

use App\Tbvideo;
use Illuminate\Http\Request;

class TbvideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbvideo = Tbvideo::all();
        return view('tbvideo.index', compact('tbvideo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbvideo.create');
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
            'kdvideo' => 'required|size:4',
            'nmvideo' => 'required',
            'keterangan' => 'required'
            
        ]);

        tbvideo::create($request->all());

        return redirect('/tbvideo')->with('status', 'Data video berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbvideo  $tbvideo
     * @return \Illuminate\Http\Response
     */
    public function show(Tbvideo $tbvideo)
    {
        return view('tbvideo.index', compact('tbvideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbvideo  $tbvideo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbvideo $tbvideo)
    {
        return view('tbvideo.edit', compact('tbvideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbvideo  $tbvideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbvideo $tbvideo)
    {
        $request->validate([
            'kdvideo' => 'required|size:4',
            'nmvideo' => 'required',
            'keterangan' => 'required'
            
        ]);
        tbvideo::where('id', $tbvideo->id)
            ->update([
                'kdvideo' => $request->kdvideo,
                'nmvideo' => $request->nmvideo,
                'keterangan' => $request->keterangan
                
            ]);
        return redirect('/tbvideo')->with('status', 'Data video berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbvideo  $tbvideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbvideo $tbvideo)
    {
        tbvideo::destroy($tbvideo->id);
        return redirect('/tbvideo')->with('status', 'Data video berhasil dihapus');
    }
}
