@extends('master-layout')
    @section('contenido')
        <ol class="breadcrumb">
            <li><a href="{!! URL::to('ramos') !!}">Ramos</a></li>
            <li><a href="{!! URL::to('ramos/'.$ramo->id) !!}">{!! $ramo->id !!}</a></li>
            <li class="active">Editando</li>
        </ol>
        <h1>Viendo ramo {!! $ramo->nombre !!}</h1>

        {!! Form::model($ramo,['url' => ['ramos',$ramo->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre',['class'=>'form-label']) !!}
                {!! Form::text('nombre', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion',['class'=>'form-label']) !!}
                {!! Form::text('description', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Guardar!',['class'=>'btn btn-success']) !!}
            </div>

        {!! Form::close() !!}
    @endsection