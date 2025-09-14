@extends('home.layout.app')
@section('title', 'Contatos')

@section('content')
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contatos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contatos</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">299</h1>
                        <h5 class="text-white mt-1">
                            Sucesso em conseguir um cliente feliz
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">125</h1>
                        <h5 class="text-white mt-1">
                            Milhares de negócios de sucesso
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">
                            Total de clientes que amam Alô Brasil
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">
                            Avaliações dadas por clientes satisfeitos
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s"
                style="max-width: 600px; visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <h5 class="text-primary">Entrar em contato</h5>
                <h1 class="mb-3">Contato para qualquer dúvida</h1>

            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Endereço</h4>
                                <a href="" target="_blank" class="h5">Av. Chico Brito, 1317</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Tel.</h4>
                                <a class="h5"
                                    href="https://wa.me//559982854848?text=Tenho%20interesse%20em%20comprar%20seu%20carro"
                                    target="_blank">+5599 82854848</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email</h4>
                                <a class="h5" href="" target="_blank">contato@alobrasil.net</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7029517872793!2d-47.44156122617423!3d-6.55913129343399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d0a064d3cca30d%3A0xf0a3479b22224e43!2sAv.%20Chico%20Brito%2C%201317%20-%20Estreito%2C%20MA%2C%2065975-000%2C%20Brazil!5e0!3m2!1sen!2sbd!4v1707995093203!5m2!1sen!2sbd"
                                width="380" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="alert alert-success text-center" style="margin: 10px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="text-align: center">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('msg'))
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="alert alert-success text-center"
                                                style="color: black; margin: 10px; background-color: yellow;">
                                                {{ session('msg') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form action="{{ route('home.contatos.store') }}" method="post">
                            @csrf
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" name="name" class="form-control border-0 py-3"
                                        placeholder="Seu nome">
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="fone" class="form-control border-0 py-3"
                                        placeholder="Telefone">
                                </div>
                                <div class="mb-4">
                                    <input type="email" name="email" class="form-control border-0 py-3"
                                        placeholder="Seu Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" name="assunto" class="form-control border-0 py-3"
                                        placeholder="Assunto">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" name="msg" cols="10"
                                        placeholder="Mensagem"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
