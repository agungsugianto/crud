<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
class FrontController extends Controller
{
    public function blog()
    {
        $beritas = berita::paginate(6);
        return view('frontend.blog.all',compact('beritas'));
    }

    public function singleblog($id) 
    {
        $beritas = berita::findOrFail($id);
        return view('frontend.blog.single',compact('beritas'));
    }
}

