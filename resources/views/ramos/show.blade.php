@extends('master-layout')

    @section('contenido')
        <ol class="breadcrumb">
            <li><a href="{!! URL::to('ramos') !!}">Ramos</a></li>
            <li>{!! $ramo->nombre !!}</li>
        </ol>
        <h1>Viendo ramo {!! $ramo->nombre !!}</h1>
        {!! $ramo->nombre !!}
        {!! $ramo->codigo !!}
        {!! $ramo->creditos !!}
    @endsection