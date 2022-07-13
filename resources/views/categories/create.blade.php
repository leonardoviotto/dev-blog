@extends('categories.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h2>Aggiungi Categoria</h2>
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
      <form method="post" action="{{ route('categories.store') }}">
          <div class="form-group">
              @csrf
              <label for="categoria">Titolo della categoria:</label>
              <input type="text" class="form-control" name="categoria"/>
          </div>
          <button type="submit" class="my-3 btn btn-primary">Aggiungi categoria</button>
      </form>
  </div>
</div>
@endsection