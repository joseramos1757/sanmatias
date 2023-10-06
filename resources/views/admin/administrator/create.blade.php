
@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content_header')
    <h1>CREAR ADMINISTRADOR</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.administrators.store']) !!}
            <div class="row mx-auto">
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('ci','CARNET DE IDENTIDAD') !!}
                    {!! Form::text('ci', null, ['class'=>'form-control','placeholder'=>'Ingrese numero de carnet']) !!}
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('nombre','NOMBRE') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre']) !!}
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('paterno','APELLIDO PATERNO') !!}
                    {!! Form::text('paterno', null, ['class'=>'form-control','placeholder'=>'Ingrese el apellido paterno']) !!}
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('materno','APELLIDO MATERNO') !!}
                    {!! Form::text('materno', null, ['class'=>'form-control','placeholder'=>'Ingrese el apellido materno']) !!}
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('celular','CELULAR') !!}
                    {!! Form::text('celular', null, ['class'=>'form-control','placeholder'=>'Ingrese el numero de celular']) !!}
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('fechanac','FECHA DE NACIMIENTO') !!}
                    {!! Form::date('fechanac', null, ['class'=>'form-control','placeholder'=>'Ingrese la fecha de nacimiento']) !!}
                </div> 
                <div class="form-group col-sm-12 col-md-6">
                    {!! Form::label('direccion','DIRECCION') !!}
                    {!! Form::text('direccion', null, ['class'=>'form-control','placeholder'=>'Ingrese la dirección']) !!}
                </div>
               <!-- Campos del usuario -->
               <div class="form-group col-sm-12 col-md-6">
                    {{ Form::label('user_id', 'NOMBRE DEL USUARIO') }}
                    {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
                </div>

                    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}

          
            </div>
            
            {!! Form::close() !!}
        </div>

    </div>
@stop

