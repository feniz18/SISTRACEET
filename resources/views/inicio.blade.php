@extends('plantillas.general')
@section('titulo','inicio de mi pagina')
@section('imagen'){{asset('admin/dist/img/avatar5.png')}}@endsection
@section('nombre')DAVID STEVEN @endsection
@section('rol')Administrador @endsection
@if (Auth::check())
  @section('ocultarBarra','sidebar-mini')
@else
  @section('ocultarBarra','layout-top-nav')
@endif
