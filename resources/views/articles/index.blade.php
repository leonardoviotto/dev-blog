@extends('articles.layout')
@section('content')

<header class="my-5"><h1>Lista degli articoli</h1></header>
<div class="my-4">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif

  <div class="pull-right mb-2">
  <a class="btn btn-success" href="{{ route('articles.create') }}"> Crea nuovo articolo</a>
  </div>
  <table class="table table-responsive table-striped">
    <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b>Titolo articolo</b></td>
          <td><b>Anteprima testo</b></td>
          <td colspan="2"><b>Categoria</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->titolo}}</td>
            <td>{{Str::limit($article->testo, 20)}}</td>
            <td>{{$article->categoria}}</td>
            <td><a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Mostra</a></td>
            <td><a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Modifica</a></td>
            <td>
            <form action="{{ route('articles.destroy',$article->id) }}" method="POST">                     
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
            <a title="Vai alle categorie" class="btn btn-primary" href="{{ route('categories.index') }}">Categorie</a>
  </div>
<div>
@endsection