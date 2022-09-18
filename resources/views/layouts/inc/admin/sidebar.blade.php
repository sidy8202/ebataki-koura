<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('img/ebataki.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">

    <title>E-BATAKI</title>
</head>
<body>
  <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #0E4C92;" >
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#uiii-basic" aria-expanded="false" aria-controls="uii-basic">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">Courriers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="uiii-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/courriers_sortants">Courriers envoyés</a></li>
            <li class="nav-item"> <a class="nav-link" href="/courriers_entrants">Couriers reçu</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title" data-bs-toggle="modal" data-bs-target="#ModalApropos">A propos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Deconnexion</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- debut Modal envoyer courriers -->
  <div class="modal fade" id="ModalApropos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">A Propos de l'application E-BATAKI</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid g-0">
            <div class="container">
                <div class="row">
                <p><img src="{{asset('img/ebataki.png')}}" alt="logo" class="img-logo">
                    <p class="saibain">L’APPLICATION E-Bataki</p> 
                </p>
                </div>
            </div>            
            <div class="container corps"> 
              <div class="row">
                <div class="col-lg-6">
                    <p class="essai"> 
                        E-Bataki est une application de gestion de courrier développée par Faso Jigi à travers la JCA . 
                        E-Bataki permet de traiter les courriers à l’arrivée et au départ , elle assure la tracibilité  du courrier dans le circuit et la securité des données enregistreés.
                        Désormais les services publics et privés gérerons avec éfficacité leurs courrriers.
                    </p>
                    <p class="essai">E-Bataki une chance pour l’administration  malienne.</p> 
                </div>
                <div class="col-lg-6">
                  <img src="{{asset('img/Group79-1.png')}}" alt="logo" width="300px" height="300px" style="position: relative; left: 150px;">
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin modal envoyer --> 
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
=======
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #0E4C92;" >
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiii-basic" aria-expanded="false" aria-controls="uiii-basic">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Courriers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="uiii-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/courrierentrandd') }}">Courriers entrants</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Couriers sortants</a></li>
              </ul>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Ventes</span>
            </a>
          </li> -->


          <li class="nav-item">
            <a class="nav-link" href="{{ url ('/departements')}}">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Gérer départements</span>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="uii-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Gérer départements</span>
              <i class="menu-arrow"></i>
            </a>
          </li> --}}



          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#gerer" aria-expanded="false" aria-controls="gerer">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Gérer utilisateurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gerer">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Admins</a>

              </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/secretaire') }}">Secrétaires</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/utilisateursadd') }}">Simple utilisateurs</a></li>


              </ul>
            </div>
          </li>


        </ul>
      </nav>
<<<<<<< HEAD
      
>>>>>>> bcc0cc620e24b161718052c98b44e9aafe7ecbd3
=======
>>>>>>> 3eb9be7baf446b234dc347d98068d100d5f80b6d
