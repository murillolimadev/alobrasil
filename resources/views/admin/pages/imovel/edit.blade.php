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
                    <div class="col-lg-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Editar</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <div class="modal-body">
                                    <form action="{{ route('admin.imoveis.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleSelectRounded0">Tipo
                                                    </label>
                                                    <select class="custom-select rounded-0" id="exampleSelectRounded0"
                                                        disabled name="tipo">
                                                        <option selected>{{ $data->tipo->name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="customFile">Imagem</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" value="{{ $data->image }}"
                                                            class="custom-file-input" placeholder="" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Imagem</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="customFile">Endereço</label>
                                                    <div class="custom-file">
                                                        <input type="text" name="endereco" required class="form-control"
                                                            placeholder="Endereço" value="{{ $data->endereco }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="">Quartos</label>
                                                    <input type="number" class="form-control" name="quartos"
                                                        placeholder="0" value="{{ $data->quartos }}">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Área</label>
                                                    <input type="text" class="form-control" name="area"
                                                        placeholder="0" value="{{ $data->area }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Garagem</label>
                                                    <input type="number" class="form-control" name="garagem"
                                                        placeholder="0" value="{{ $data->garagem }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Banheiros</label>
                                                    <input type="number" class="form-control" name="banheiros"
                                                        placeholder="0" value="{{ $data->banheiros }}">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Cidade</label>
                                                    <input type="text" class="form-control" name="city"
                                                        placeholder="Cidade" value="{{ $data->city }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Valor</label>
                                                    <input type="text" class="form-control" name="valor"
                                                        placeholder="0.00" value="{{ $data->valor }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Descrição</label>
                                                    <input type="text" class="form-control" name="desc"
                                                        value="{{ $data->desc }}" placeholder="Informações adicional">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="submit" class="btn btn-primary">Atualizar</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.layout.footer')
    </div>
@endsection
