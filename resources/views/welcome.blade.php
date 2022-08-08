
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
        <div class="container-fluid g-0">
            <div class="row">
                <div class="nav-menu">
                    <div class="logo">
                        <img src="{{asset('img/ebataki.png')}}" alt="logo">
                    </div>
                </div>
            </div>
            <div class="row car ">
                <div id="carouselExampleSlidesOnly" class="carousel slide  " data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img src="{{asset('img/carou1.jpg')}}" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carou2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carou3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    </div>
                </div>
            <h4>Bienvenue sur l'application E-Bataki</h4>
            <h5>L’application E-Batiki facilite le traitement et la gestion de vos courriers de bout en bout</h5>
            <div class="tab">
            
                        <table>
                            <tr>
                                <th><img id="font" src="{{asset('img/user.png')}}"></th>
                                <th><img id="font" src="{{asset('img/courier.png')}}"></th>
                                <th><img  id="font" src="{{asset('img/ergo.png')}}"></th>
                            </tr>
                            <tr>
                                <td>Gestiion des utilisateurs</td>
                                <td>Gestions des courriers</td>
                                <td>Gagner du temps</td>
                                </tr>
                            
                            
                        </table>
                </div>
            </div>
            
            <footer>
                <h5 class="copyright">Copyright <span class="copy">©</span> 2022 E-Bataki</h5>          
            </footer>
        </div>
        
        
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
    </html>