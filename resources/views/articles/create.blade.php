@extends('articles.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h2>Aggiungi Articolo</h2>
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
      <form method="post" action="{{ route('articles.store') }}">
          <div class="form-group">
              @csrf
              <label for="titolo">Titolo dell'articolo:</label>
              <input type="text" class="form-control" name="titolo"/>
          </div>
          <div class="form-group mt-2">
              <label for="testo">Testo dell'articolo:</label>
              <input type="text" class="form-control" name="testo"/>
          </div>
          <div class="form-group mt-2">
              <label for="testo">Categoria dell'articolo:</label>
              <input type="text" class="form-control" name="categoria"/>
          </div>
          <button type="submit" class="my-3 btn btn-primary">Aggiungi articolo</button>
      </form>
  </div>
</div>
@endsection