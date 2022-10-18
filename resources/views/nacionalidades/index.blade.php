@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="display-4 text-center">Nacionalidades</h1>
        <a href="{{ route('nacionalidades.create', []) }}" class="btn btn-info mb-2">Add</a>
        <table class="table table-stripe table-bordered table-hover">
            <thead style="text-align: center">
                <th>Descrição</th>
                <th>Ações</th>
            </thead>

            <tbody>
                @foreach ($nacionalidades as $nacionalidade)
                    <tr style="text-align: center">
                        <td>{{ $nacionalidade->descricao }}</td>
                        <td><a href="{{ route('nacionalidades.edit', ['id' => $nacionalidade->id]) }}"
                                class="btn-sm btn-dark">
                                <i class="fa fa-edit" aria-hidden="true"></i></a>

                            <a href="#" onclick="return ConfirmaExclusao({{ $nacionalidade->id }})"
                                class="btn-sm btn-dark">
                                <i class="fa fa-trash" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $nacionalidades->links('pagination::bootstrap-4') }}


    </div>
@stop

@section('table-delete')
    "nacionalidades"
@endsection
