    
@extends('layout.template')

@section('content')
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
            <div class="row row-cols-1 row-cols-md-5 g-5">
                <div class="col grow">
                    <a href="https://www.instagram.com/nusaphoto/" class="text-decoration-none text-dark">
                        <div class="shadow card my-card kiri show-on-scroll">
                            <img src="{{asset('image/nusa-photo-bali.jpg')}}" class="card-img-top zoom" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Photo</h5>
                                <p class="card-text text-center">Abadikan momen spesial<br> anda bersama kami</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/nusagiftbali/" class="text-decoration-none text-dark">
                        <div class="shadow card my-card bawah show-on-scroll">
                            <img src="{{asset('image/nusa-gift-bali.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Gift</h5>
                                <p class="card-text text-center">Buat kenangan<br>yang tak terlupakan</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/nusaprintbali/" class="text-decoration-none text-dark">
                        <div class="shadow card my-card bawah show-on-scroll">
                            <img src="{{asset('image/jasa-printing-bali.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Print</h5>
                                <p class="card-text text-center">Advertising, Digital Printing, & Offset Printing</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/nusapratamaprinting.reklame/" class="text-decoration-none text-dark">
                        <div class="shadow card my-card kanan show-on-scroll">
                            <img src="{{asset('image/jasa-reklame-bali.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusa Pratama</h5>
                                <p class="card-text text-center">Photo Neonbox <br> & Billboard</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col grow">
                    <a href="https://www.instagram.com/nusaweblab/" class="text-decoration-none text-dark">
                        <div class="shadow card my-card kanan show-on-scroll">
                            <img src="{{asset('image/jasa-website-bali.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nusaweblab</h5>
                                <p class="card-text text-center">Desain & Pengembangan Website</p>
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
@endsection
    