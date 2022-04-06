<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container w-50">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="image/chien1.png" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
        <img src="image/chien2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="image/chien3.png" class="d-block w-100" alt="...">
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
</div>

<div>
    @foreach($ch3 as $key => $cho)
    <div class="card" style="width: 18rem;">
        <img src="image/chien{{$key=$key}}.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$key}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/exo/{{$key}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>