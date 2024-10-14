@extends('master')

@section('content')


<h2>Editar</h2>

@if (session()->has('message'))
    {{session()->get('message')}}

@endif

<form action="{{route('categories.update', ['category' => $category->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{$category->name}}" >
    <input type="text" name="description" value="{{$category->description}}" >
    <button type="submit">Editar</button>
    <a href="{{ route('categories.index')}}">Voltar</a>
    
</form>

@endsection
