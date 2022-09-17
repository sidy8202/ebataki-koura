@extends('layouts.secretairelayout')

@section('content')

<div class="container mt-3">
    @if(count($errors) > 0)
              <div class=" alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>    
  
                      @endforeach
                  </ul>
              </div>
          @endif
  
          @if (session('success'))
              <div class="alert alert-success">
                  <p>{{ session('success') }}</p>
              </div> 
          @endif
      <div class="card">
        <div class="card-header">Envoie de courriers entrants
          <a href="" class="btn btn-primary btn-sm float-end text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" >Envoyer</a>
        </div>
        <div class="card-body">
        
        </div>
      </div>
  </div>
@endsection

