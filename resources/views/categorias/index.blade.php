@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <h2>Categorías</h2>
    <ul class="list-group">
        @foreach ($categorias as $categoria)
            <li class="list-group-item">
                <a href="{{ url('/categorias/' . $categoria->id . '/productos') }}">{{ $categoria->nombre }}</a>
            </li>
        @endforeach
    </ul>
@endsection
