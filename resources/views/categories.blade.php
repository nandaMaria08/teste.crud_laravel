@extends('master')

@section('content')

<a href="{{ route('categories.create')}}">CREATE</a>

<hr>

<h2>Categories</h2>

<ul>
    
    @foreach($categories as $category)
        <li>{{$category->name}} | {{$category->description}} | <a href="{{ route('categories.edit', ['category' =>$category->id]) }}">Editar</a> | <a href="{{ route('categories.show', ['category' =>$category->id]) }}">Show</a></li>
    @endforeach

</ul>


@endsection