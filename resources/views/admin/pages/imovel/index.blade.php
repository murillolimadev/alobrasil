@extends('admin.layout.app')
@section('title', 'Imóveis')

@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.nav')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Imóveis</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger text-center" style="margin: 10px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="text-align: center">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('msg'))
                                <div class="row text-center">
                                    <div class="col-md-12" \>
                                        <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                            {{ session('msg') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- /.card -->
                            <a href="{{ route('admin.imoveis.create') }}" class="btn btn-primary"
                                style="margin-bottom: 5px;">Cadastrar</a>

                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Endereço</th>
                                                <th>Descrição</th>
                                                <th>tipo</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($imoveis as $item)
                                                <tr>
                                                    <td>{{ $item->endereco }}</td>
                                                    <td>{{ $item->desc }}</td>
                                                    <td>{{ $item->tipo->name }}</td>
                                                    <td style="width: 200px;">
                                                        <a href="{{ route('admin.pages.video.index', [$item->id]) }}"
                                                            title="Vídeos" class="btn btn-default btn-sm" title="Fotos">
                                                            <i class="nav-icon far fa-file"></i>
                                                        </a>
                                                        <a href="{{ route('admin.imoveis.fotos', $item->id) }}"
                                                            title="Imagens" class="btn btn-success btn-sm" title="Fotos">
                                                            <i class="nav-icon far fa-image"></i>
                                                        </a>
                                                        <a href="{{ route('admin.imoveis.edit', [$item->id]) }}"
                                                            title="Editar" class="btn btn-primary btn-sm">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.imoveis.destroy', $item->id) }}"
                                                            title="Editar" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        {{-- <a href=""
                                                            class="btn-sm btn-primary">Fotos
                                                        </a>
                                                        <a href=""
                                                            class="btn-sm btn-success">
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                        <form onsubmit="return confirm('Deseja excluir?');"
                                                            action="{{ route('admin.imoveis.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                style="height: 26px">
                                                                Excluir
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </button>
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        @include('admin.layout.footer')
    </div>
@endsection
