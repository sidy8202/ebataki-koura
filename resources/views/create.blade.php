@extends('layout')

@section('content')
    <h3>Ajouter departement</h3>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif

      <form method="post" action="{{ route('departements.store') }}">
         @csrf
          <div class="form-group">
              <label for="nom" class="form-label">Logistique:</label>
              <input type="text" class="form-control" name="nom" placeholder="Veuillez entrer le nom du departement"/>
          </div>
          <button type="submit" class="btn btn-primary mt-4" >AJOUTER</button>
      </form>
  </div>
</div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
