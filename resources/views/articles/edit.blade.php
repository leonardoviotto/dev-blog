@extends('articles.layout')
@section('content')

<div class="mt-5">
  <div class="card-header">
    <h2>Modifica Articolo</h2>
  </div>
  <div class="card-body">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form method="post" action="{{ route('articles.update', $article->id) }}">
          <div class="form-group">
              @csrf
              @method('PUT')
              <label for="titolo">Titolo dell'articolo:</label>
              <input type="text" class="form-control" value="{{$article->titolo}}" name="titolo"/>
          </div>
          <div class="form-group mt-2">
              <label for="testo">Testo dell'articolo:</label>
              <input type="text" class="form-control" value="{{$article->testo}}" name="testo"/>
          </div>
          <div class="form-group mt-2">
              <label for="testo">Categoria dell'articolo:</label>
              <input type="text" class="form-control" value="{{$article->categoria}}" name="categoria"/>
          </div>
          <button type="submit" class="my-3 btn btn-primary">Modifica articolo</button>
      </form>
  </div>
</div>
@endsection