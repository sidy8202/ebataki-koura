<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interface</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/af-2.4.0/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

</head>


<body>
<div class="container">

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
              <form action= "{{ action('CourriersEntrantsController@store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">							
                      <div class="mb-3">
                          <label for="" class="form-label">N° Référence</label>
                          <input type="text" class="form-control" name="num_reference" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Objet</label>
                          <input type="text" class="form-control" name="objet" >
                      </div>
                      <div class="mb-3">
                          <label for="" class="form-label">Expediteur</label>
                          <input type="text" class="form-control" name="expediteur" >
                      </div>
                    

                      <div class="mb-3">
                          <label for="" class="form-label">Secretaire</label>

                          <select name="id_secretaire">
                            @foreach ($bara as $voila)
                              <option value="{{$voila->id}}"><strong>{{ $voila->nom}}  {{ $voila->prenom}}</strong></option>
                            @endforeach
                          </select>
                        
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Le Courrier</label>
                        <input type="file" class="form-control" name="" >
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


      <!-- debut Modal envoyer courriers -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Supprimer Courriers</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action= "{{ action('CourriersEntrantsController@store') }}" method="POST" id="supprimer">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <div class="modal-body">							
                     

              <h6>Etes-vous sur de supprimer cette entrée?</h6>
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
        <thead class="text-center" style="background-color:#0B6623";>
            <tr>
              <td class="masque">ID</td>
              <td>N°Reference</td>
              <td>Objet</td>
              <td>Expediteur</td>
              <td>Secretaire</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <!-- //Affichage dans le tebleau -->
        <tbody>
            @foreach($crst as $crs)
            <tr>
                <td class="masque">{{$crs->id}}</td>
                <td>{{$crs->num_reference}}</td>
                <td>{{$crs->objet}}</td>
                <td>{{$crs->expediteur}}</td>
                <td>{{$crs->id_secretaires}}</td>
                <td>
                  <button class="btn btn-success edit" data-bs-toggle="modal" data-bs-target="#modifcourentrants">Mod</button>
                  <button class="btn btn-danger supp" data-bs-toggle="modal" data-bs-target="#deleteModal">Supp</button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>


       <!-- debut Modal modifier courriers -->
      <div class="modal fade" id="modifcourentrants" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter utilisateur</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/courriers_entrants" id="modformcour" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">							
                        <div class="mb-3">
                            <label for="" class="form-label">N° Référence</label>
                            <input type="text" class="form-control" id="num_reference" name="num_reference" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Objet </label>
                            <input type="text" class="form-control" id="objet" name="objet" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Expediteur</label>
                            <input type="text" class="form-control" id="expediteur" name="expediteur" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Secretaire</label>
                          
                            <input type="text" class="form-control" id="id_secretaire" name="id_secretaire" >
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

      <!-- debut modal supprimer -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/courriers_entrants" id="deleteForm" method="POST">
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



  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 

 <script>
    $(document).ready( function () 
    {
        $('#datatable').DataTable();
    } );
</script>

{{-- Hide content of table --}}

<script>
    $(document).ready( function () {
        $('.masque').hide();
    } );
</script>

{{-- End of hide --}}

<script type="text/javascript">
    
    $(document).ready(function() {
    
    var table = $('#datatable').DataTable();
    
    
    table.on('click','.edit', function() {
    
    
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();
        console.log(data);
    

        $('#num_reference').val(data[1]);
        $('#objet').val(data[2]);
        $('#expediteur').val(data[3]);
        // $('#phone').val(data[4]);
        // $('#email').val(data[5]);
        // $('#username').val(data[6]);
        // $('#poste').val(data[7]);
       
    
        $('#editForm').attr('action', '/courriers_entrants/'+data[0]);
        $('#editModal').modal('show');
    });

    // Start Delete//
    table.on('click','.delete', function()
     {
        $tr = $(this).closest('tr');
            if ($($tr).hasClass('child'))
            {
                $tr = $tr.prev('.parent');
            }

        var data = table.row($tr).data();
        console.log(data);
        $('#supprimer').attr('action', '/courriers_entrants/'+data[0]);
        $('.supp').modal('show');
    });

  //End Delete//

});
</script>

</body>

</html>