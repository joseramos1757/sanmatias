
@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content_header')
    <h1>ADMINISTRACIÓN DE USUARIOS DEL SISTEMA</h1>
@stop

@section('content')
    <p></p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{--<script> console.log('Hi!'); </script>--}}
    <script>
       Swal.fire(
           'You clicked the button!',
           'Good job!',
           'success'
)
    </script>
@stop