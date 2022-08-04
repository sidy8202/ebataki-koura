
@extends('layouts.master')
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Veuillez renseigner les champs suivants Svp !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('secretaire')}}" method="post">
                @csrf


                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Adresse</label>
                        <input type="text" name="adresse" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Id_département</label>
                        <select id="" class="form-control" name="id_departement">
                            @foreach ($departements as $departements )
                                <option value="{{$departements->id}}">{{$departements->id_departement}}</option>
                            @endforeach
                          
                        </select>
                       
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>

            </form>

        </div>
    </div>
</div>





<div class="container-fluid px-4">

    <div class="card mt-5 ">

        <div class="card-header">
            <h4>La liste des secrétaires
            <a href="" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</a>
            </h4>
            
        </div>

        <div class="card-body" >
                    
            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Secretaire</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>ID Département</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departements as $secretaires )
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    
</div>




@endsection