@extends('admin.layout.app')
@section('title', 'Vídeos')
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
                            <h1 class="m-0">Vídeos</h1>
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
                            <button type="button" class="btn btn-primary" style="margin-bottom: 5px" data-toggle="modal"
                                data-target="#modal-default">
                                Cadastrar
                            </button>

                            <div class="modal fade" id="modal-default" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Enviar vídeo</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.pages.video.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $id }}">
                                                <label for="">Título</label>
                                                <input type="text" name="title" class="form-control">
                                                <label for="">Vídeo</label>
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            {{-- <a href="" class="btn btn-primary" style="margin-bottom: 5px;">Cadastrar</a> --}}
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Vídeos</h3>
                                </div>
                                <div class="card-body table-responsive p-2">
                                    <div class="row">
                                        @foreach ($video as $item)
                                            <div class="col-md-2 p-1" style="margin: 30px">
                                                <video src="{{ asset('upload/video/'.$item->file) }}"
                                                    style="width: 200px; height: 120px;">
                                                </video>
                                                <span>{{ $item->title }}</span>
                                                <a href="{{ route('admin.video.destroy', ['id' => $item->id]) }}"
                                                    class="float-right"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        @endforeach
                                    </div>
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
