@extends('layouts.secretaire')

@section('content')


<div class="container-fluid px-4">
  <div class="row">
          <div class="col-xl-6 col-md-6">
              <div class="card bg-success text-white mb-4">
                  <div class="card-body">Courriers reçu
                    <h2>100</h2>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">Plus de Détails</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-md-6">
              <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Courriers envoyés
                      <h2>201</h2>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">Plus de Détails</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>


     
</div>
@endsection