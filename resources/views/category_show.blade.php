@extends('master')


@section('content')

<div  style="text-align: center;">
<h2>Category - {{$category->name}}</h2>

<p>description - {{$category->description}}</p>

<form action="{{route('categories.destroy', ['category' => $category->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
    


</form>
<a href="{{ route('categories.index')}}">Voltar</a>
</div>






@endsection