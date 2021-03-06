<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\kategori;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $beritas = berita::with('kategori')->get();
        return view('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();     
        return view('berita.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'lampau' => 'required|unique:beritas|max:255',
            'terkini' => 'required|min:2', 
            'id_kategori' => 'required|'           
        ]);

        $beritas = new berita;
        $beritas->lampau = $request->lampau;
        $beritas->terkini = $request->terkini;
        $beritas->id_kategori = $request->id_kategori;
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritas = berita::findOrFail($id);
        $kategori = kategori::all();
        $selectedKategori = berita::findOrFail($id)->id_kategori;
        return view('berita.edit',compact('beritas','kategori','selectedKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'lampau' => 'required|max:255',
            'terkini' => 'required|min:2',
            'id_kategori' => 'required|'
        ]);
        $beritas = berita::findOrFail($id);
        $beritas->lampau = $request->lampau;
        $beritas->terkini = $request->terkini;
        $beritas->id_kategori = $request->id_kategori;
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = berita::findOrFail($id);
        $beritas->delete();
        return redirect()->route('berita.index');
    }
}
