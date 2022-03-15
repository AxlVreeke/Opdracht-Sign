@extends('base')

@section('content')
    <style>
        .carousel-item{
            height: 32rem;
            background: #000;
            color: white;
            position: relative;
        }
        .carousel-content{
            position: absolute;
            bottom: 0;
            left: 6.5%;
            right: 6.5%;
            z-index: 20;
            padding-bottom: 50px;
        }
        .overlay-image{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.5;
        }
    </style>

    <div id="#myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(../img/placeholder-home.avif);"></div>
                <div class="carousel-content">
                    <h1>Example Headline</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid architecto aut cupiditate deleniti, error ex exercitationem harum hic maxime, necessitatibus nobis quos recusandae sequi, tenetur vel voluptas voluptatem voluptates.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(../img/placeholder-home.avif);"></div>
                <div class="carousel-content">
                    <h1>Example Headline</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid architecto aut cupiditate deleniti, error ex exercitationem harum hic maxime, necessitatibus nobis quos recusandae sequi, tenetur vel voluptas voluptatem voluptates.</p>
                </div>
            </div>
            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="sr-only">Next</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>

@endsection
