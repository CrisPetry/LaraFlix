<?php
use Carbon\Carbon;
?>

@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>
    {!! Form::open(['url' => 'atores/store']) !!}

    <div class="class form-group">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="class form-group">
        {!! Form::label('nacionalidade', 'Nacionalidade') !!}
        {!! Form::select(
            'nacionalidade',
            [
                'Brasileiro' => 'Brasileiro',
                'Americano' => 'Americano',
                'Canadense' => 'Canadense',
                'Argentino' => 'Argentino',
            ],
            'Brasileiro',
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>

    <div class="class form-group">
        {!! Form::label('dt_nascimento', 'Data de Nascimento') !!}
        {!! Form::date('dt_nascimento', Carbon::now(), ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="class form-group">
        {!! Form::label('inicio_atividades', 'Início das Atividades') !!}
        {!! Form::date('inicio_atividades', Carbon::now(), ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="class form-group">
        {!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-warning']) !!}
    </div>

    {!! Form::close() !!}
@stop
