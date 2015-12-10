@extends('master-layout')

    @section('contenido')

        @if($errors->has())
                <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                    {!! $error !!}
            @endforeach
                </div>
        @endif

        {!! Form::open(['url' => 'ramos','class'=>'form-horizontal']) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre',['class'=>'control-label']) !!}
                {!! Form::text('nombre', '',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion',['class'=>'control-label']) !!}
                {!! Form::text('descripcion', '',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Guardar!',['class'=>'btn btn-success']) !!}
            </div>

        {!! Form::close() !!}

    @endsection