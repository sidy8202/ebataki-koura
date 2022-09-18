@extends('layouts.secretairelayout')

@section('content')


<div class="container-fluid px-4">
  <div class="row">
          <div class="col-xl-6 col-md-6">
              <div class="card bg-success text-white mb-4">
                  <div class="card-body">Courriers reçus
                    <h2>{{$courriers_reçus->count()}}</h2>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
<<<<<<< HEAD
                      <a class="small text-white stretched-link" href="/courriers_entrants">Plus de Détails</a>
=======
                      <a class="small text-white stretched-link" href="{{ route('mescourriers') }}">Plus de Détails</a>
>>>>>>> 3eb9be7baf446b234dc347d98068d100d5f80b6d
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>

          <div class="col-xl-6 col-md-6">
              <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Courriers sortants
                      <h2>{{$courriers_envoyes->count()}}</h2>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
<<<<<<< HEAD
                      <a class="small text-white stretched-link" href="/courriers_sortants">Plus de Détails</a>
=======
                      <a class="small text-white stretched-link" href="">Plus de Détails</a>
>>>>>>> 3eb9be7baf446b234dc347d98068d100d5f80b6d
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
</div>
@endsection
