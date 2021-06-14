<nav class="navbar fixed-top navbar-expand-lg navbar-dark {{request() -> is ('/') ? ' ' : 'bg-dark'}} p-md-3">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('image/logo putih.svg')}}" width="200 px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav my-active">
                    <li class="nav-item">
                        <a class="me-5 nav-link text-white {{request() -> is ('/') ? 'active' : ''}}" href="/">Home</a>
                    </li>
                    <li class="me-5 nav-item">
                        <a class="nav-link text-white {{request() -> is ('about') ? 'active' : ''}}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{request() -> is ('contact') ? 'active' : ''}}" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>