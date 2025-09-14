@extends('admin.layout.app')
@section('title', 'Categoria')

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
                            <h1 class="m-0">Categoria</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.categoria.index') }}">Categoria</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
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
                        <div class="col-12">
                            @if (session('msg'))
                                <div class="alert alert-success text-center">
                                    {{ session('msg') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-12">
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Editar</h3>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <form action="{{ route('admin.categoria.update', ['id' => $data->id]) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleSelectRounded0">Nome</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ old('name', $data->name) }}" id="">
                                                </div>
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                            </div>

                                        </div>
                                    </form>
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
