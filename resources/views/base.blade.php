<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Curio</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #03357c;">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="../../../img/curio-01-zwart-logo-rgb.png" width="100" height="auto" class="d-inline-block align-top" alt="Foto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('opdrachten')}}" >Opdrachten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('uitleg')}}" >Uitleg</a>
                    </li>

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}" style="color: #ffffff; ">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}" style="color: #ffffff;">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>

                                    <a class="dropdown-item" href="{{ route('logout') }} "
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<!-- Footer -->
<footer class="text-center text-lg-start text-muted" style="background-color: @if(isset($color)){{$color}} @else #03357c @endif; padding-top: 1px; margin-top: 35px; border-top: solid 1px black">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-light">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4" style="border-bottom: solid 1px #fff; padding-bottom: 15px">
                        <i class="fas me-3"></i>Sign
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi iusto quis recusandae. A animi asperiores, at cum deleniti deserunt dignissimos et eum fuga ipsam laboriosam laborum nihil quaerat sequi!
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-light">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="border-bottom: solid 1px #fff; padding-bottom: 15px">
                        Links
                    </h6>
                    <p>
                        <a href="{{route('home')}}" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="{{route('opdrachten')}}" class="text-reset">Opdrachten</a>
                    </p>
                    <p>
                        <a href="{{route('uitleg')}}" class="text-reset">Uitleg</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-light">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4"  style="border-bottom: solid 1px #fff; padding-bottom: 15px">
                        Links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="border-bottom: solid 1px #fff; padding-bottom: 15px">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-light" style="background-color: #072e62;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="{{route('home')}}">Sign-opdracht.com</a>
    </div>
    <!-- Copyright -->
</footer>
<script src="js/main.js"></script>
</body>
</html>
