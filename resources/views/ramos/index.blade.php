@extends('master-layout')

@section('contenido')

    <ol class="breadcrumb">
        <li class="active">Ramos</li>
    </ol>
    <table class="table table-hover">
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Creditos</th>
        <th>Acciones</th>

        @foreach($ramos as $ramo)
            <tr>
                <td>{!! $ramo->codigo !!} </td>
                <td>{!! $ramo->nombre !!} </td>
                <td> {!! $ramo->creditos !!}</td>
                <td>
                    <a class="btn btn-default btn-xs btn-success" href="{!! URL::to('/ramos/'.$ramo->id) !!}" role="button">Ver</a>
                    <a class="btn btn-default btn-xs btn-warning" href="{!! URL::to('/ramos/'.$ramo->id.'/edit') !!}" role="button">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $ramos->render() !!}

@endsection