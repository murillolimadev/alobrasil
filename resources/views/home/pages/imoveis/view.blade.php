@extends('home.layout.app')
@section('title', $data->endereco)
<style>
    .profile {
        width: 600px;
        height: 500px;
        /* border-radius: 50%; */
    }

    .profile img {
        width: 100%;
    }
</style>

@section('content')
    <div class="container-fluid my-5">
        <div class="container py-5">
            <div class="container gallery-container">
                <h1>{{ $data->tipo->name }},{{ $data->endereco }}</h1>
                <p class="page-description text-left">Clicar na imagem para vê-la ampliada</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('upload/imoveis/' . $data->image) }}" alt=""
                                style="width: 100%; height: 400px;">
                        </div>
                    </div>


                </div>
                <div class="col-md-5">
                    <h5 class="text-primary">Imóvel {{ $data->tipo->name }}</h5>
                    {{-- <h1 class="mb-4">{{ $data->endereco }}</h1> --}}
                    <p>{{ $data->city }}</p>
                    <p>Area m²: {{ $data->area }}</p>
                    <p>Quartos: {{ $data->quartos }}</p>
                    <p>Banheiros: {{ $data->banheiros }}</p>
                    <p>Garagem: {{ $data->garagem }}</p>
                    <h2>R$:{{ $data->valor }}</h2>
                    <p class="mb-4">{{ $data->desc }}</p>
                    <a href="https://wa.me//559982854848?text=Tenho%20interesse%20em%20comprar%20seu%20imóvel"
                        class="btn btn-secondary rounded-pill px-5 py-3 text-white">Tenho interesse</a>
                </div>
                {{-- <p>Veja os vídeos</p> --}}


                <div class="row g-5 justify-content-center">
                    @foreach ($data->images as $item)
                        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="blog-item position-relative bg-light rounded" style="margin-top: 50px;">
                                <a href="" data-toggle="modal"
                                    data-target=".bd-example-modal-lg{{ $item->id }}">
                                    <img src="{{ asset('upload/imoveis/' . $item->image) }}"
                                        class="img-fluid w-100 rounded-top" alt=""
                                        style="width: 100px; height: 140px;">
                                </a>
                            </div>
                        </div>
                        {{-- modal --}}
                        <div class="modal fade bd-example-modal-lg{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="videoModalLabel">Alô Brasil</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div style="widows: 600px; height: 450px;">
                                        <img src="{{ asset('upload/imoveis/' . $item->image) }}" data-toggle="modal"
                                            data-target=".bd-example-modal-lg{{ $item->id }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($data->videos as $item)
                        <div class="col-lg-6 col-xl-4 text-center wow fadeIn" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="blog-item position-relative bg-light rounded" style="margin-top: 50px;">
                                <a href="" data-toggle="modal" class="vview"
                                    data-target=".bd-example-modal-lg{{ $item->id }}">
                                    <video src="{{ asset('upload/video/' . $item->file) }}"
                                        width="100%" height="auto"></video>
                                </a>
                            </div>
                        </div>

                        {{-- modal --}}
                        <div class="modal fade bd-example-modal-lg{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="videoModalLabel">{{ $item->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <iframe src="{{ asset('upload/video/' . $item->file) }}" width="600"
                                            height="450" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="col-lg-12">
            <span style="font-size: 10px">Compartilhar</span> <br>
            <a href="https://api.whatsapp.com/send?text=link/{{ $data->slug }}">
                <img src="{{ asset('home/img/whatsapp.png') }}" class="whatsapp" alt="" width="25">
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=link/">
                <img width="25" height="25"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/768px-Facebook_icon_2013.svg.png"
                    alt="">
            </a>
        </div>
    </div>

@endsection
