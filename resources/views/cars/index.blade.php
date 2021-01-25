@extends('master.master')

@section('title', 'Detalhamento dos Carros | App Cars')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Detalhamento dos Carros</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= url('/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Detalhamento dos Carros</li>
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
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <a href="{{ route('cars.create') }}" class="btn btn-primary">Adicionar Novo</a>
                                    </div>
                                    <div class="col-lg-12">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ $message }}
                                            </div>
                                        @endif

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Marca</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Cor</th>
                                                    <th scope="col">Placa</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cars as $car)
                                                    <tr>
                                                        <td>{{ $car->brand }}</td>
                                                        <td>{{ $car->name }}</td>
                                                        <td>{{ $car->color }}</td>
                                                        <td>{{ $car->board }}</td>
                                                        <td class="text-right">
                                                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                                                <a href="{{ route('cars.edit', $car->id) }}" class="btn-sm btn-primary text-small" title="Editar"><i class="fas fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn-sm btn-danger border-0" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>                   
                </div>
            </div>
        </div>
    </div>
@endsection
