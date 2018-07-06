<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beranda;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berandas = Beranda::all();
        return view('beranda.index',compact('berandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beranda.create');
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
            'asalusul' => 'required|unique:berandas|max:255',
            'visi_misi' => 'required|min:2',
            'struktur_or' => 'required|min:2'
            
        ]);

        $berandas = new Beranda;
        $berandas->asalusul = $request->asalusul;
        $berandas->visi_misi = $request->visi_misi;
        $berandas->struktur_or = $request->struktur_or;
        $berandas->save();
        return redirect()->route('beranda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(beranda $beranda)
    {
        $berandas = Beranda::findOrFail($id);
        return view('beranda.show',compact('berandas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berandas = Beranda::findOrFail($id);
        return view('beranda.edit',compact('berandas'));
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
            'asalusul' => 'required|max:255',
            'visi_misi' => 'required|min:2',
            'struktur_or' => 'required|min:2'
        ]);
        $berandas = Beranda::findOrFail($id);
        $berandas->asalusul = $request->asalusul;
        $berandas->visi_misi = $request->visi_misi;
        $berandas->struktur_or = $request->struktur_or;
        $berandas->save();
        return redirect()->route('beranda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berandas = Beranda::findOrFail($id);
        $berandas->delete();
        return redirect()->route('beranda.index');
    }
}
