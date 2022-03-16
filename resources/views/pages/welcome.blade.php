@extends('base')

@section('content')
    <style>

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
                    <h1>Welkom op de Sign page!</h1>
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
    <div class="container">
        <div class="flex-wrapper">
            <span><h2>Een opdracht laten maken?</h2></span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem id incidunt omnis repellendus soluta tempore vero! A ab dolorem eos eveniet ipsam iste provident, quos sequi ut, vel voluptate voluptatum?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae explicabo fugit iusto labore, odit officia, omnis quae quidem rem soluta temporibus tenetur, unde. Consectetur eligendi ex fugiat perspiciatis ut?</p>
    </div>
@endsection
