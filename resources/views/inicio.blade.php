@extends('plantillas.general')
@section('titulo','Inicio')
@section('Cssp')

  <link rel="stylesheet" type="text/css" href="{{asset('css/slider/slider.css')}}">

@endsection
@section('contenido')

  @include('partes.slider')

@endsection
