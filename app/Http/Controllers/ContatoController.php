<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    private $contato;
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = Contato::orderby('id','DESC')->get();
        return view('admin.pages.contatos.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'fone' => 'required',
            'email' => 'required',
            'assunto' => 'required',
            'msg' => 'required',
        ]);

        $this->contato->name = $request->name;
        $this->contato->fone = $request->fone;
        $this->contato->email = $request->email;
        $this->contato->assunto = $request->assunto;
        $this->contato->msg = $request->msg;
        $this->contato->save();
        return redirect()->back()->with('msg', 'Mensagem enviada com sucesso! Entraremos em contato.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
