<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Image;
use App\Models\Imovei;
use App\Models\Rural;
use App\Models\Video;

class HomeController extends Controller
{
    // 1 = urnabo
    // 2 = rural
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = Categoria::latest()->get();
        $imoveis = Imovei::latest()->get();
        return view('home.pages.index', compact('imoveis', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function quemsomos()
    {
        $tipo = Categoria::latest();
        return view('home.pages.quem-somos', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function anuncie()
    {
        $tipo = Categoria::orderby('id', 'DESC')->get();
        return view('home.pages.anuncie.index', compact('tipo'));
    }

    public function contatos()
    {
        $tipo = Categoria::latest()->get();
        $categoria = Categoria::orderby('id', 'DESC')->get();
        return view('home.pages.contatos.index', compact('categoria', 'tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function tipo($id)
    {
        $tipo = Categoria::latest()->get();
        $data = Imovei::where('cat_id', $id)->get();
        $tipo1 = Categoria::find($id);
        return view('home.pages.imoveis.index', compact('tipo','tipo1', 'data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function view($slug)
    {
        $tipo = Categoria::latest()->get();
        $data = Imovei::where('slug', '=', $slug)->first();
        $video = Video::where('id_imovel','=', $data->id)->get();
        return view('home.pages.imoveis.view', compact('data', 'tipo', 'video'));
    }
}
