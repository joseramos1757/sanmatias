
@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content_header')
    <h1>EDITAR ADMINISTRADOR</h1>
@stop

@section('content')
    <p>PAGINA DONDE SE CREA EL ADMINISTRADOR</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::model($administrator,['route' => ['admin.administrators.update', $administrator],'method'=>'put']) !!}
                <div class="row mx-auto">
                    <div class="form-group col-sm-12 col-md-6">
                        
                        {!! Form::label('ci','CARNET DE IDENTIDAD') !!}
                        {!! Form::text('ci', null, ['class'=>'form-control','placeholder'=>'Ingrese numero de carnet','pattern' => '[0-9]+']) !!}
                        
                        @error('ci')
                            <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('nombre','NOMBRE') !!}
                        {!! Form::text('nombre', null, ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese el nombre']) !!}
                        @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('paterno','APELLIDO PATERNO') !!}
                        {!! Form::text('paterno', null, ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese el apellido paterno']) !!}
                        @error('paterno')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('materno','APELLIDO MATERNO') !!}
                        {!! Form::text('materno', null, ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese el apellido materno']) !!}
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('celular','CELULAR') !!}
                        {!! Form::text('celular', null, ['class'=>'form-control','placeholder'=>'Ingrese el numero de celular']) !!}
                        @error('celular')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('fechanac','FECHA DE NACIMIENTO') !!}
                        {!! Form::date('fechanac', null, ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese la fecha de nacimiento']) !!}
                        @error('fechanac')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
                    <div class="form-group col-sm-12 col-md-6">
                        {!! Form::label('direccion','DIRECCION') !!}
                        {!! Form::text('direccion', null, ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese la dirección']) !!}
                        @error('direccion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                <!-- Campos del usuario -->
      
                        {{ Form::submit('ACTUALIZAR CATEGORIA', ['class' => 'btn btn-primary']) }}

            
                </div>
                
                {!! Form::close() !!}
            </div>

        </div>
    @stop


@stop