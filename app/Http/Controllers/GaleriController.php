<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use File;
use Auth;
class GaleriController extends Controller
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
        
$galeris = galeri::all();
        
return view('galeri.index',compact('galeris'));
   
 }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');

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
            'gambar' => 'required|',
            'keterangan' => 'required|'
        ]);
        $galeris = new galeri;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/dist/img/gambargaleri/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $galeris->gambar = $filename;
        }
        $galeris->keterangan = $request->keterangan;
        $galeris->save();
        
                return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeris = galeri::findOrFail($id);
        return view('galeri.edit',compact('galeris'));
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
            'gambar' => 'required|',
            'keterangan' => 'required'
        ]);
        $galeris = galeri::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/dist/img/gambargaleri/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
        if ($galeris->gambar){
            $old_foto = $galeris->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/dist/img/gambar/galeri'
            . DIRECTORY_SEPARATOR . $galeris->gambar;
              try{
                  file::delete($filepath);
              } catch (FileNotFoundException $e) {

              }

        }
            $galeris->gambar = $filename;
        }
        $galeris->keterangan = $request->keterangan;
        $galeris->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = galeri::findOrFail($id);
        if ($galeris->gambar){
            $old_foto = $galeris->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/dist/img/gambar/galeri'
            . DIRECTORY_SEPARATOR . $galeris->gambar;
              try{
                  file::delete($filepath);
              } 
              catch (FileNotFoundException $e) {
                  
              
            }
        }

        $galeris->delete();
        return redirect()->route('galeri.index');
    }
}
