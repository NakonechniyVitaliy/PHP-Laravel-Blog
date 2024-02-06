<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href=" {{asset('/assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href=" {{asset('/assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href=" {{asset('/assets/css/style.css')}}">
    <script src=" {{asset('/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src=" {{asset('/assets/js/loader.js')}}"></script>
    <script src="https://kit.fontawesome.com/a7040f048a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            @if (auth()->user())
                <a href="{{ route('personal.profile.index', auth()->user()->id) }}" style="text-decoration:none;font-size: 15pt;"><i class="fa fa-user mr-2" style="font-size: 15pt;color:#007bff;" aria-hidden="true"></i>{{ auth()->user()->name }}</a>
            @else
                <a href="{{ route('login')}}" style="text-decoration:none;font-size: 15pt;"><i class="fa fa-user mr-2" style="font-size: 15pt;color:grey;" aria-hidden="true"></i>Guest</a>
            @endif
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    @auth()
                        <li class="nav-item active">
                            <a href="{{ route('personal.profile.index', auth()->user()->id) }}" class="btn btn-outline-primary">Personal Area</a>
                        </li>
                    @endauth
                    <li>
                        <a href="{{ route('main.index') }}" class="btn btn-outline-primary ml-2">Main</a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}" class="btn btn-outline-primary ml-2">Category</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth()
                        @if( auth()->user()->role === 0)
                            <li class="nav-item mr-2">
                                <a href="{{route('admin.main.index')}}" class="btn btn-outline-primary">Admin</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" class="btn btn-outline-primary" value="Logout">
                            </form>
                        </li>
                    @endauth
                    @guest()
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Sign In</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<div style="width: 20vw; height: 30vh;">

</div>

<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src=" {{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">hello@edica.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Company</a>
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">Blog</a>
                    <a href="#!" class="nav-link">Partners</a>
                    <a href="#!" class="nav-link">Careers</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Reporting</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                    <a href="#!" class="nav-link">Pricing</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src=" {{ asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src=" {{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src=" {{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
