<?php

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImoveiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuralController;
use App\Http\Controllers\UrbanaController;
use App\Models\Urbana;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('aluguel/', [HomeController::class, 'aluguel'])->name('home.aluguel.index');
Route::get('quem-somos/', [HomeController::class, 'quemsomos'])->name('home.quemsomos');

Route::get('imoveis/{tipo}', [HomeController::class, 'tipo'])->name('home.tipo.index');

Route::get('contatos/', [HomeController::class, 'contatos'])->name('home.contatos.index');
Route::post('contatos/store', [ContatoController::class, 'store'])->name('home.contatos.store');
//view categoria
Route::get('tipo/{id}', [HomeController::class, 'tipo'])->name('home.categoria.view');
Route::get('imovel/{slug}', [HomeController::class, 'view'])->name('home.imovel.view');
//anuncie
Route::get('anuncie/', [HomeController::class, 'anuncie'])->name('home.anuncie.index');


route(sadsadsa);

// admin
Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    //categorias
    Route::get('admin/categoria/', [CategoriaController::class, 'index'])->name('admin.categoria.index');
    Route::get('admin/categoria/create', [CategoriaController::class, 'create'])->name('admin.categoria.create');
    Route::get('admin/categoria/edit/{id}', [CategoriaController::class, 'edit'])->name('admin.categoria.edit');
    Route::post('admin/categoria/update', [CategoriaController::class, 'update'])->name('admin.categoria.update');
    Route::post('admin/categoria/store', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::delete('admin/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('admin.pages.categoria.destroy');

    //slider
    //  Route::get('admin/slider/', [SliderController::class, 'index'])->name('admin.slider.index');
    //  Route::get('admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
    //  Route::post('admin/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');

    // imoveis
    Route::get('admin/imoveis/', [ImoveiController::class, 'index'])->name('admin.imoveis.index');
    Route::get('admin/imoveis/create', [ImoveiController::class, 'create'])->name('admin.imoveis.create');
    Route::post('admin/imoveis/store/', [ImoveiController::class, 'store'])->name('admin.imoveis.store');
    Route::get('admin/imoveis/edit/{id}', [ImoveiController::class, 'edit'])->name('admin.imoveis.edit');
    Route::post('admin/imoveis/update/{id}', [ImoveiController::class, 'update'])->name('admin.imoveis.update');
    Route::get('admin/imoveis/delete/{id}', [ImoveiController::class, 'destroy'])->name('admin.imoveis.destroy');
   
    //imoveis fotos
    Route::get('admin/fotos/imoveis/{id}', [ImoveiController ::class, 'fotos'])->name('admin.imoveis.fotos');
    Route::post('admin/fotos/imoveis/store', [ImageController::class, 'store'])->name('admin.imoveis.fotos.store');
    Route::get('admin/image/delete/{id}', [ImageController::class, 'destroy'])->name('admin.image.destroy');
   
    //CONTATOS
    Route::get('admin/contatos/', [ContatoController::class, 'index'])->name('admin.pages.contatos.index');

    //videos
    Route::get('admin/video/{id}', [VideoController::class, 'index'])->name('admin.pages.video.index');
    Route::post('admin/video/store', [VideoController::class, 'store'])->name('admin.pages.video.store');
    Route::get('admin/video/delete/{id}', [VideoController::class, 'destroy'])->name('admin.video.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
