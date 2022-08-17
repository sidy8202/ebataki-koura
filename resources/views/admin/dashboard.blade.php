@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
<<<<<<< HEAD
                <div class="card-body">Courriers Entrants
                <h2>{{$courriers_reçus}}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="">Plus de Détails</a>
=======
                <div class="card-body">Courriers entrants
                <h2>100</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ url('admin/courrierentrandd') }}">Plus de Détails</a>
>>>>>>> 8fdbddb32124be2a30ae86b9fd499d664bccbce0
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
<<<<<<< HEAD
                <div class="card-body">Courriers envoyés
                    <h2>{{$courriers_envoyes}}</h2>
=======
                <div class="card-body">Courriers sortants
                    <h2>201</h2>
>>>>>>> 8fdbddb32124be2a30ae86b9fd499d664bccbce0
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Plus de Détails</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Nombre Secrétaires
                <h2>399</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
<<<<<<< HEAD
                    <a class="small text-white stretched-link" href="#">Plus de Détails</a>
=======
                    <a class="small text-white stretched-link" href="{{ url('admin/secretaire') }}">Plus de Détails</a>
>>>>>>> 8fdbddb32124be2a30ae86b9fd499d664bccbce0
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Nombres Users
                <h2>49</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
<<<<<<< HEAD
                    <a class="small text-white stretched-link" href="">Plus de Détails</a>
=======
                    <a class="small text-white stretched-link" href="{{ url('admin/utilisateursadd') }}">Plus de Détails</a>
>>>>>>> 8fdbddb32124be2a30ae86b9fd499d664bccbce0
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection