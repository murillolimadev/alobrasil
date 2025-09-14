@extends('home.layout.app')
@section('title', 'Quem somos')
@section('content')
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Quem somos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item" aria-current="page">Quem somos</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('home/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <h5 class="text-primary">Quem somos</h5>
                    <p>
                        A Alô Brasil ®, como sinônimo de honestidade, confiança e qualidade
                        em consultoria e intermediação imobiliária surgiu em 2002, envolvendo negócios de venda de diversos
                        imóveis na cidade e região.
                    </p>
                        <h2>Nossa Missão</h2>
                        <p>
                            Transformar sonhos em realidade é o que nos motiva, proporcionar a melhor parte do sonho das
                        pessoas, na conquista do seu lar, oferecendo imóveis de qualidade, com preço justo e com a qualidade
                        que nossos clientes buscam. Solidificando assim o sonho de todo brasileiro de ter o Imóvel Próprio.
                        Tudo isso só é possível, pois trabalhamos com pessoas que têm sonhos e objetivos, e para nós é um
                        prazer saber que fazemos parte da transformação de histórias e conquistas.
                        </p>


                        <h2>Visão</h2>
                        <p>
                            Ser reconhecida como uma empresa concretizadora de sonhos, promovendo a qualidade, preço justo e
                        inovação através da gestão imobiliária pelos serviços prestados, sendo referência para nossos
                        clientes, construtoras, parceiros e colaboradores.
                        </p>



                        <h2>Valores</h2>
                        Excelência profissional; <br><br>
                        Respeito ao ser humano de forma integral; <br>
                        Compromisso com o atendimento, preços justos e com a busca dos melhores resultados para nossos
                        clientes, parceiros e colaboradores; <br><br>
                        Ética, cidadania, integridade e transparência;
                        Responsabilidade com as transações, solidez e idoneidade,
                        Comprometimento com o investimento do cliente;
                        Inovação tecnológica permanente; <br><br>
                        Promoção do desenvolvimento pessoal e profissional para todos os colaboradores;
                        Desenvolvimento e valorização das relações interpessoais harmoniosas; <br><br>
                        Agente de mudanças e conquistas na vida dos nossos clientes, colaboradores e parceiros.

                    </p>
                    
                    {{-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
