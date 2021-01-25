@extends('master.master')

@section('title', 'Editar Carro | App Cars')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar Carro</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= url('/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Editar Carro</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-0">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Ops, encontramos alguns erros...</strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('cars.update', $car->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <label for="brand">Marca</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="brand" id="brand" value="{{ $car->brand }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <label for="model">Modelo</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="model" id="model" value="{{ $car->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <label for="color">Cor</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="color" id="color" value="{{ $car->color }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <label for="board">Placa</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="board" id="board" value="{{ $car->board }}">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('cars.index') }}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
