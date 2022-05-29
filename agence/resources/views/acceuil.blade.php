<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: #FEE8F9">
        <div class="container fluid">
    
  
          
                  <a class="navbar-brand "  href="#" style="color: black">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav  justify-content-center">
                      <a class="nav-link active " aria-current="page" href="#" style="color: black">Home</a>
                      <a class="nav-link" href="/" style="color: black">Features</a>
                      <a class="nav-link" href="#" style="color: black">Pricing</a>
                      <a class="nav-link" href="produit" style="color: black">ajoute </a>
                      {{-- <a href="{{ route('login') }}" class="nav-link navbar-light " style="color: white">Log in</a>
                      <a href="{{ route('register') }}" class="nav-link nav justify-content-end"  style="color: white">Register</a> --}}
                    </div>
                  </div>
                </div>
            </nav>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.maisons-pierre.com/wp-content/uploads/2021/04/1300x600-maisons-pierre-lemag-quel-type-maison-choisir-couv.jpg" class="car" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="http://image.over-blog.com/7nG4s3SIL9DWZD1yEkxttu_nbws=/filters:no_upscale()/image%2F0668430%2F20210113%2Fob_c1a7b1_maison.jpg" class="car" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://maisonslacin.fr/wp-content/uploads/2020/02/Olympe_162.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="row">
                @foreach ($maisons as $maison)

               
                <div class="col-md-4 col-12 col-lg-3">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ $maisons->photo }}" class="card-img-top" id="card-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $maisons->name }}</h5>
                      <p class="card-text">{{ $maisons->description }}</p>
                      <p class="card-text">{{ $maisons->prix }} €</p>
                      {{-- <a href="produitDetail/{{$maison -> id}}" id="btn" class="btn">Voir plus</a> --}}
                    </div>
                  </div>
                </div>
            
                @endforeach
              </div>
















              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>