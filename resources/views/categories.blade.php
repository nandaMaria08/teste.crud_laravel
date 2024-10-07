@extends('master')

@section('content')

<a href="{{ route('categories.create')}}">CREATE</a>

<hr>

<h2>Categories</h2>

<ul>
    
    @foreach($categories as $category)
        <li>{{$category->name}} | {{$category->description}}</li>
    @endforeach

</ul>


@endsection