@extends('adminlte::page')

@section('content')
    <h3>Editando nacionalidade: {{ $nacionalidades->descricao }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['nacionalidades.update', 'id' => $nacionalidades->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'descrição:') !!}
        {!! Form::text('descricao', $nacionalidades->descricao, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Nacionalidade', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
