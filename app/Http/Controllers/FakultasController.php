<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\kategori;
class FakultasController extends Controller
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
        $fakul = Fakultas::with('kategori')->get();
        return view('fakultas.index',compact('fakul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();     
           return view('fakultas.create',compact('kategori'));
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
            'nama' => 'required|unique:fakultas|max:255',
            'keterangan' => 'required|min:2', 
            'id_kategori' => 'required|'           
        ]);

        $fakul = new Fakultas;
        $fakul->nama = $request->nama;
        $fakul->keterangan = $request->keterangan;
        $fakultas->id_kategori = $request->id_kategori;
        $fakul->save();
        return redirect()->route('fakultas.index');
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
        $fakul = Fakultas::findOrFail($id);
        $kategori = kategori::all();
        $selectedKategori = Fakultas::findOrFail($id)->id_kategori;
        return view('fakultas.edit',compact('fakultas','kategori','selectedKategori'));
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
            'nama' => 'required|max:255',
            'keterangan' => 'required|min:2',
            'id_kategori' => 'required|'
        ]);
        $fakul = Fakultas::findOrFail($id);
        $fakul->nama = $request->nama;
        $fakul->keterangan = $request->keterangan;
        $fakultas->id_kategori = $request->id_kategori;
        $fakul->save();
        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakul = Fakultas::findOrFail($id);
        $fakul->delete();
        return redirect()->route('fakultas.index');
    }
}
