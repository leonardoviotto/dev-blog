@extends('categories.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mostra categoria</h2>
        </div>
        <div class="pull-right">
            <a title="Vai alla home page" class="btn btn-primary" href="{{ route('categories.index') }}">Vai alla home page</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome categoria:</strong>
            {{ $categorie->categoria }}
        </div>
    </div>   
</div>
@endsection