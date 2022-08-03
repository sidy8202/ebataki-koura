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
   <!-- affichage du message d'erreur -->
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
    <!-- fin  -->
  <div class="card">
    <div class="card-header">
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Envoyer</button>
              </div>

               <!-- debut Modal envoyer courriers -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter utilisateur</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action= "{{ action('CourriersSortantsController@store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">							
                      <div class="mb-3">
                          <label for="" class="form-label">N° Référence</label>
                          <input type="text" class="form-control" name="num_reference" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Obet </label>
                          <input type="text" class="form-control" name="objet" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Destinateur</label>
                          <input type="text" class="form-control" name="destinateur" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Expéditeur</label>
                          <input type="text" class="form-control" name="id_utilisateurs" >
                      </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
              </form>

          </div>
        
        </div>
      </div>
    </div>
    <!-- fin modal envoyer -->  
              <div class="col">
                <h2>La liste des courriers envoyés</h2>
              </div>
          </div>
      </div>
    </div>
    <table class="table table-striped table-bordered" id="datatable">
        <thead class="text-center">
            <tr>
              <td>N°Reference</td>
              <td>Objet</td>
              <td>Destinateur</td>
              <td>Expediteur</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
<!-- //Affichage dans le tebleau -->
        <tbody>
            @foreach($crst as $crs)
            <tr>
                <td>{{$crs->num_reference}}</td>
                <td>{{$crs->objet}}</td>
                <td>{{$crs->destinateur}}</td>
                <td>{{$crs->destinateur}}</td>
                <td>
                  <button class="btn btn-success edit" data-bs-toggle="modal" data-bs-target="#exampleModa2">Mod</button>
                  <button class="btn btn-danger edit" data-bs-toggle="modal" data-bs-target="#deleteModal">Supp</button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
      </table>

      <!-- debut modal supprimer -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/courriers_sortants" id="deleteForm" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="mb-3">
                                <h6>Voulez-vous vraiment supprimer cette ligne?</h6>
                            </div>
                            <input type="hidden" name="_method" value="DELETE">
                        </div>  
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                            <button type="submit" class="btn btn-danger">Oui</button>
                        </div>
                    </form>
            </div>
        </div>
      </div>
      <!-- fin modal supprimer -->

      <!-- debut Modal modifier courriers -->
    <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter utilisateur</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action= "{{ action('CourriersSortantsController@store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">							
                      <div class="mb-3">
                          <label for="" class="form-label">N° Référence</label>
                          <input type="text" class="form-control" name="num_reference" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Obet </label>
                          <input type="text" class="form-control" name="objet" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Destinateur</label>
                          <input type="text" class="form-control" name="destinateur" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Expéditeur</label>
                          <input type="text" class="form-control" name="id_utilisateurs" >
                      </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
              </form>

          </div>
        
        </div>
      </div>
    </div>
    <!-- fin modal modifier -->
  </div>
<div>
<!-- les liens js et data table -->


 
<script>
    $(document).ready( function () 
    {
        $('#datatable').DataTable();
    } );
</script>


@endsection