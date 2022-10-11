@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="display-4 text-center">Atores</h1>
        <table class="table table-stripe table-bordered table-hover">
            <thead style="text-align: center">
                <th>ID</th>
                <th>Nome</th>
                <th>Nacionalidade</th>
                <th>Data de Nascimento</th>
                <th>Início das Atividades</th>
                <th>Ações</th>
            </thead>

            <tbody>
                @foreach ($atores as $ator)
                    <tr style="text-align: center">
                        <td>{{ $ator->id }}</td>
                        <td>{{ $ator->nome }}</td>
                        <td>{{ $ator->nacionalidade }}</td>
                        <td>{{ Carbon\Carbon::parse($ator->dt_nascimento)->format('d/m/Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($ator->inicio_atividades)->format('d/m/Y') }}</td>
                        <td><a href="{{ route('atores.edit', ['id' => $ator->id]) }}" class="btn-sm btn-dark">
                                <i class="fa fa-edit" aria-hidden="true"></i></a>

                            <a href="#" onclick="return ConfirmaExclusao({{ $ator->id }})" class="btn-sm btn-dark">
                                <i class="fa fa-trash" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('table-delete')
    "atores"
@endsection
