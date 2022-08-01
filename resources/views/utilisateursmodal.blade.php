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
<!-- Modal d'ajout pour utilisateur -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter utilisateur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action= "{{ action('UtilisateursController@store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">							
                    <div class="mb-3">
                        <label for="" class="form-label">Nom </label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Prenom </label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Adresse physique </label>
                        <input type="text" class="form-control" name="adresse" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Telephone</label>
                        <input type="text" class="form-control" name="phone" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" name="email" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" name="username" >
                    </div>
                            
                    <div class="mb-3">
                        <label for="" class="form-label">Mot de passe </label>
                        <input type="text" class="form-control" name="password" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Poste</label>
                        <input type="text" class="form-control" name="poste" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Departement</label>
                        <select name="id_departement" id="">
                            <option value=""></option>
                        </select>
                        
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>

        </div>
       
      </div>
    </div>
  </div>

  {{-- Fin d'ajout utilisateur --}}

  {{-- Debut du Modal pour modifier --}}

  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier un utilisateur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action= "" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">							
                    <div class="mb-3">
                        <label for="" class="form-label">Nom </label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Prenom </label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Adresse Physique </label>
                        <input type="text" class="form-control" name="adresse" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Telephone</label>
                        <input type="text" class="form-control" name="phone" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" name="email" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" name="username" >
                    </div>
                            
                    <div class="mb-3">
                        <label for="" class="form-label">Mot de passe </label>
                        <input type="text" class="form-control" name="password" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Poste</label>
                        <input type="text" class="form-control" name="poste" >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Departement</label>
                        <select name="id_departement" id="">
                            <option value=""></option>
                        </select>
                        
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

  {{--  Fin du Modal pour modifier--}}


  
    {{-- Delete Modal --}}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/vol" id="deleteForm" method="POST">
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
                         Ajouter utilisateur
                    </button>
                </div>
                <div class="col">
                    <h2>La liste des utilisateurs</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Poste</th>
                <th scope="col">Departement</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($bara as $gnouma)
                
              <tr>
                <th scope="row">{{ $gnouma->nom }}</th>
                <td>{{ $gnouma->prenom }}</td>
                <td>{{ $gnouma->adresse }}</td>
                <td>{{ $gnouma->phone }}</td>
                <td>{{ $gnouma->email }}</td>
                <td>{{ $gnouma->username }}</td>
                <td>{{ $gnouma->poste }}</td>
                <td></td>
                
                <td>
                    <a href="#" class="edit btn btn-primary btn-sm"  >Edit</a> 
                    <a href="#" class="delete btn btn-danger btn-sm"  >Supp</a> 
                    
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
    
        $('#cod').val(data[1]);
        $('#dest').val(data[2]);
        $('#dates').val(data[3]);
        $('#heures').val(data[4]);
        $('#classa').val(data[5]);
        $('#pclassa').val(data[6]);
        $('#classb').val(data[7]);
        $('#pclassb').val(data[8]);
    
        $('#editForm').attr('action', '/vol/'+data[0]);
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
        $('#deleteForm').attr('action', '/vol/'+data[0]);
        $('#deleteModal').modal('show');
    });

  //End Delete//

});
</script>
</body>
</html>