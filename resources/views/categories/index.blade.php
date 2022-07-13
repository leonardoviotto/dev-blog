@extends('categories.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <div class="pull-right">
  <a class="btn btn-success" href="{{ route('categories.create') }}"> Crea nuova categoria</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Categoria</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $categorie)
        <tr>
            <td>{{$categorie->id}}</td>
            <td>{{$categorie->categoria}}</td>
            <!-- <td><a class="btn btn-info" href="{{ route('categories.show',$categorie->id) }}">Mostra</a></td>
            <td><a class="btn btn-primary" href="{{ route('categories.edit',$categorie->id) }}">Modifica</a></td> -->
            <td> 
        <form action="{{ route('categories.destroy',$categorie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="pull-right my-2">
            <a title="Vai alla home articoli" class="btn btn-primary" href="{{ route('articles.index') }}">Articoli</a>
  </div>
<div>
@endsection