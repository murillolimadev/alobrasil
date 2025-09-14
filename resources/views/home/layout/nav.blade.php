 <!-- Spinner Start -->
 <div id="spinner"
     class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-grow text-primary" role="status"></div>
 </div>
 <!-- Spinner End -->

 <!-- Topbar Start -->
 <div class="container-fluid bg-dark py-2 d-none d-md-flex">
     <div class="container">
         <div class="d-flex justify-content-between topbar">
             <div class="top-info">
                 <small class="me-3 text-white-50"><a href="#"><i
                             class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Av Chico Brito, N 1317</small>
                 <small class="me-3 text-white-50"><a href="#"><i
                             class="fas fa-envelope me-2 text-secondary"></i></a>contato@alobrasil.net</small>
             </div>
             {{-- <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your
                     Business</small></div> --}}
             <div class="top-link">
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-facebook-f text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-twitter text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-instagram text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i
                         class="fab fa-linkedin-in text-primary"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <div class="container-fluid bg-primary">
     <div class="container">
         <nav class="navbar navbar-dark navbar-expand-lg py-0">
             <a href="/" class="navbar-brand">
                 <h1 class="text-white fw-bold d-block">Alô<span class="text-secondary">Brasil</span> </h1>
             </a>
             <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                 data-bs-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                 <div class="navbar-nav ms-auto mx-xl-auto p-0">
                     <a href="/" class="nav-item nav-link">Home</a>
                     <a href="{{ route('home.quemsomos') }}" class="nav-item nav-link">Quem somos</a>
                     <a href="{{ route('home.anuncie.index') }}" class="nav-item nav-link">Anuncie</a>
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Imóveis</a>
                         <div class="dropdown-menu rounded">
                             @foreach ($tipo as $item)
                                 <a href="{{ route('home.tipo.index', $item->id) }}"
                                     class="dropdown-item">{{ $item->name }}
                                 </a>
                             @endforeach
                         </div>
                     </div>
                     <a href="{{ route('home.contatos.index') }}" class="nav-item nav-link">Contatos</a>
                 </div>
             </div>
             <div class="d-none d-xl-flex flex-shirink-0">
                 <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                     <a href="https://wa.me//559982854848?text=Tenho%20interesse%20em%20comprar%20seu%20imovel"
                         class="position-relative animated tada infinite">
                         <i class="fa fa-phone-alt text-white fa-2x"></i>
                         <div class="position-absolute" style="top: -7px; left: 20px;">
                             <span><i class="fa fa-comment-dots text-secondary"></i></span>
                         </div>
                     </a>
                 </div>
                 <div class="d-flex flex-column pe-4 border-end">
                     <span class="text-white-50">Tem alguma pergunta?</span>
                     <span class="text-secondary">Tel: +55 99 8285-4848</span>
                 </div>
                 <div class="d-flex align-items-center justify-content-center ms-4 ">
                     <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Navbar End -->
