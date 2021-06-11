<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Nusa Group</title>
    <link href="asset/image/icon.svg" rel='shortcut icon'>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('image/logo putih.svg')}}" width="200 px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="me-5 nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="me-5 nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="poition-absolute">
        <div id="carouselExampleSlidesOnly" class="my-carou caroucarousel slide" data-bs-ride="carousel">
            <div class="my-carou carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/image1.jpg')}}" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/image1.jpg')}}" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/image1.jpg')}}" class="img-fluid d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="row row-cols-1 row-cols-md-4 g-5">
                <div class="col grow">
                    <a href="https://www.instagram.com/digitalphotographics" class="text-decoration-none text-dark">
                        <div class="shadow card my-card kiri show-on-scroll">
                            <img src="{{asset('image/photo.jpg')}}" class="card-img-top zoom" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Photo</h5>
                                <p class="card-text text-center">This is a longer card with supporting text</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/digitalphotographics" class="text-decoration-none text-dark">
                        <div class="shadow card my-card bawah show-on-scroll">
                            <img src="{{asset('image/gift.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Gift</h5>
                                <p class="card-text text-center">This is a longer card with supporting text</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/digitalphotographics" class="text-decoration-none text-dark">
                        <div class="shadow card my-card bawah show-on-scroll">
                            <img src="{{asset('image/print.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Print</h5>
                                <p class="card-text text-center">This is a longer card with supporting text</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/digitalphotographics" class="text-decoration-none text-dark">
                        <div class="shadow card my-card kanan show-on-scroll">
                            <img src="{{asset('image/pack.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Packaging</h5>
                                <p class="card-text text-center">This is a longer card with supporting text</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <p class="fs-6 fw-lighter text-center text-light position-absolute top-100 start-50 translate-middle">
            Copyright © 2021 nusabaligroup.com - All Rights
            Reserved</p>
    </div>
    <script src="{{asset('bootstrap/js/show-on-scroll.js')}}"></script>
    <script src="https://kit.fontawesome.com/a6c813d4c0.js" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>