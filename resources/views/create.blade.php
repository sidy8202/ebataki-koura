@extends('layout')
@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    ENvoie de vos courriers
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('courriers_sortants.store', $crs->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="numero">N°Reference</label>
              <input type="text" class="form-control" name="numero" value="{{ $crs->num_reference }}"/>
          </div>
          <div class="form-group">
              <label for="objet">Object</label>
              <input type="text" class="form-control" name="objet" value="{{ $crs->objet }}"/>
          </div>
          <div class="form-group">
              <label for="destinateur">Destinateur</label>
              <input type="text" class="form-control" name="destinateur" value="{{ $crs->destinateur }}"/>
          </div>
          <div class="form-group">
              <label for="utilisateurs">Nom_utilisateur</label>
              <input type="text" class="form-control" name="id_utilisateurs" value="{{ $crs->id_utilisateurs }}"/>
          </div>
          <button type="submit" class="btn btn-success">Envoyer</button>
      </form>
  </div>
</div>
