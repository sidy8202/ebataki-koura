<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/af-2.4.0/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>

<!-- Modal d'ajout pour departement -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter departement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action= "{{ action('DepartementsController@store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">							
                    <div class="mb-3">
                        <label for="" class="form-label">Nom </label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Ajouetr</button>
                </div>
            </form>

        </div>
       
      </div>
    </div>
  </div>

  {{-- Fin d'ajout departement --}}

  {{-- Debut du Modal pour modifier --}}

  <div class="modal fade" id="modifier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier departement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action= "/departements" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">							
                    <div class="mb-3">
                        <label for="" class="form-label">Nom </label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>

        </div>
       
      </div>
    </div>
  </div>

  {{--  Fin du Modal pour modifier--}

  {{-- Delete Modal --}}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/departements" id="deleteForm" method="POST">
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

    {{-- End of delete  Modal --}}

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

  <div class="container mt-5">
  <div class="card">
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Ajouter departement
                    </button>
                </div>
                <div class="col">
                    <h2>Liste des departements</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($departements as $depart)
                
                <tr>
                    <td scope="row">{{$depart->id}}</td>
                    <th scope="row">{{$depart->nom}}</td>
                
                    <td>
                    <a href="#" class="edit btn btn-primary btn-sm" >Modifier</a> 
                    <a href="#" class="delete btn btn-danger btn-sm">Supprimer</a> 
                    
                    {{-- <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a> --}}
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
  </div>

</div>

<!-- JavaScript Bundle with Popper -->
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 <script>
    $(document).ready( function () 
    {
        $('#datatable').DataTable();
    } );
</script>

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
    
        $('#nom').val(data[1]);
    
        $('#editForm').attr('action', '/departements/'+data[0]);
        $('#modifier').modal('show');
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
        $('#deleteForm').attr('action', '/departements/'+data[0]);
        $('#deleteModal').modal('show');
    });

  //End Delete//

});
</script>

</body>
</html>