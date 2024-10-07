@section('content')

<h2>Create</h2>


@if (session()->has('message'))
{{ session()->get('message')}}
@endif


<form action="{{ route('categories.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Digite a categoria" >
    <input type="text" name="description" placeholder="Descreva a categoria" >
    <button type="submit">Cadastrar</button>
</form>