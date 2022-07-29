@extends('layout')

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

  <table class="table table-striped">

    <thead class="text-center">
        <tr>
          <td>ID</td>
          <td>N°Reference</td>
          <td>Objet</td>
          <td>Destinateur</td>
          <td>utilisateur</td>
          <td>courrier entrant</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
<!-- //Affichage dans le tebleau -->
    <tbody>
        @foreach($crst as $crs)
        <tr>
            <td>{{$crs->id}}</td>
            <td>{{$crs->num_reference}}</td>
            <td>{{$crs->objet}}</td>
            <td>{{$crs->destinateur}}</td>
            <td>{{$crs->id_utilisateurs}}</td>
            <td>{{$crs->id_courriers_entrants}}</td>
            <td><a href="{{ route('crs.edit', $crs->id)}}" class="btn btn-success">Mod</a></td>
            <td>
                <form action="{{ route('crs.destroy', $crs->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Sup</button>
                </form>
          </td>
          <td>
                <form action="{{ route('crs.destroy', $crs->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                </form>
          </td>
          <td>
            <form action="{{ route('crs.update', $crs->id)}}" method="post">
              @csrf
              @method('GET')
                <button type="submit" class="btn btn-warning">Vue</button>
            </form>
          </td>
          <td>
            <form action="{{ route('crs.store', $crs->id)}}" method="post">
              @csrf
              @method('store')
                <button type="submit" class="btn btn-primary"id="btn1" >Reserver</button>
            </form>
          </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
<div>
@endsection