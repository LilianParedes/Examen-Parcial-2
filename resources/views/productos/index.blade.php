@extends('layouts.app')

@section('title', 'Productos de ' . $categoria->nombre)

@section('content')
    <h2>Productos en la categoría: {{ $categoria->nombre }}</h2>
    <ul class="list-group">
        @foreach ($productos as $producto)
            <li class="list-group-item">
                <a href="{{ url('/productos/' . $producto->id) }}">{{ $producto->nombre }}</a>
            </li>
        @endforeach
    </ul>
@endsection
