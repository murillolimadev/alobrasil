  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="" class="nav-link">Home</a>
          </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>

      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt=""
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Buscar"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="{{ route('admin.categoria.index') }}" class="nav-link">
                          <ion-icon name="image-outline"></ion-icon>
                          <p>
                              Categorias
                          </p>
                      </a>

                  </li> 
                  <li class="nav-item">
                      <a href="{{ route('admin.imoveis.index') }}" class="nav-link">
                          {{-- <i class="nav-icon fas font-awesome"></i> --}}
                          {{-- <i class="nav-icon fas fa-search"></i> --}}
                          <ion-icon name="home-outline"></ion-icon>

                          <p>
                              Imóveis
                              <span class="badge badge-danger right">
                                  {{ App\Models\Imovei::count() }}
                              </span>
                          </p>
                      </a>
                  </li>

                  {{-- <li class="nav-item">
                      <a href="" class="nav-link">
                          <ion-icon name="home-outline"></ion-icon>

                          <p>
                              Imóveis para alugar
                              <span class="badge badge-danger right">
                                  {{ DB::table('imoveis')->count() }}
                              </span>
                          </p>
                      </a>
                  </li> --}}
                  <li class="nav-item">
                      <a href="{{ route('admin.pages.contatos.index') }}" class="nav-link">
                          <ion-icon name="people-outline"></ion-icon>
                          <p>
                              Contatos
                              <span class="badge badge-info right">
                                  {{ App\Models\Contato::count() }}
                              </span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-header"></li>


                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <li class="nav-item">
                          <input type="submit" class="form-control btn btn-sidebar" value="Sair">
                      </li>
                  </form>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
