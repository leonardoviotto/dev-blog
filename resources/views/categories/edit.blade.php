@extends('categories.layout')
@section('content')

<div class="mt-5">
  <div class="card-header">
    <h2>Modifica Categoria</h2>
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
      <form method="post" action="{{ route('categories.update', $categorie->id) }}">
          <div class="form-group">
              @csrf
              @method('PUT')
              <label for="titolo">Nome categoria:</label>
              <input type="text" class="form-control" name="categoria" value="{{$categorie->categoria}}"/>
          </div>
          <button type="submit" class="my-3 btn btn-primary">Modifica categoria</button>
      </form>
  </div>
</div>
@endsection