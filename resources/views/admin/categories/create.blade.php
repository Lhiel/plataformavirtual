@extends('adminlte::page')

@section ('title', 'Proyecto formativo')

@section ('content_header')
    <h1>Crear categoria</h1>
@stop

@section ('content')



    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store'])!!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre ']) !!}


                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror


                </div>

                {!! Form::submit('Crear categoria',['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}

        </div>
    </div>

@stop

