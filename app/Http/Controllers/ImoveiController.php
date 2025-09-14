<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Image;
use App\Models\Imovei;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImoveiController extends Controller
{
    private $imoveis;
    private $image;
    public function __construct(Imovei $imoveis, Image $image)
    {
        $this->imoveis = $imoveis;
        $this->image = $image;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imoveis = Imovei::latest()->get();
        return view('admin.pages.imovel.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = Categoria::latest()->get();
        return view('admin.pages.imovel.create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'endereco' => 'required',
            'quartos' => 'required',
            'area' => 'required',
            'garagem' => 'required',
            'banheiros' => 'required',
            'city' => 'required',
            'valor' => 'required',
            'desc' => 'required',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/imoveis'), $imageName);
            $this->imoveis->image = $imageName;
            $this->imoveis->cat_id = $request->tipo;
            $this->imoveis->endereco = $request->endereco;
            $this->imoveis->slug = Str::slug($request->endereco, '-');
            $this->imoveis->area = $request->area;
            $this->imoveis->city = $request->city;
            $this->imoveis->desc = $request->desc;
            $this->imoveis->quartos = $request->quartos;
            $this->imoveis->banheiros = $request->banheiros;
            $this->imoveis->garagem = $request->banheiros;
            $this->imoveis->valor = $request->valor;
            $this->imoveis->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Imovei $imovei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo = Categoria::latest()->get();
        $data = Imovei::find($id);
        return view('admin.pages.imovel.edit', compact('data', 'tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'endereco' => 'required',
            'quartos' => 'required',
            'area' => 'required',
            'garagem' => 'required',
            'banheiros' => 'required',
            'city' => 'required',
            'valor' => 'required',
            'desc' => 'required',
            'image' => 'required|image',
        ]);
        
        // upload de image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            # code...
            $image = $request->file('image');

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $imovel = $this->imoveis->find($id);
            $image->move(public_path('upload/imoveis/'), $nameFile);
            $imovel->image = $nameFile;
            $imovel->endereco = $request->endereco;
            $imovel->city = $request->city;
            $imovel->slug = Str::slug($request->endereco, '-');
            $imovel->area = $request->area;
            $imovel->quartos = $request->quartos;
            $imovel->banheiros = $request->banheiros;
            $imovel->garagem = $request->garagem;
            $imovel->desc = $request->desc;
            $imovel->valor = $request->valor;
            $imovel->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->imoveis->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }

    public function fotos($id)
    {
        $imovel = $this->imoveis->find($id);
        $data = $imovel->images()->latest()->get();
        return view('admin.pages.images.index', compact('data', 'id'));
    }

    public function destroyfoto($id)
    {
        $this->imoveis->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
