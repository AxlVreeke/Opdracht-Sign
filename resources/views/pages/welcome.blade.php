@extends('base')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 overlay-image" src="../img/placeholder-home.avif" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welkom op de Sign page!</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda blanditiis corporis doloremque, ea nobis porro repellat reprehenderit. Beatae consectetur nam nisi porro? Accusamus aliquid itaque laborum nobis nulla pariatur?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placeimg.com/1080/500/arch" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placeimg.com/1080/500/nature" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="flex-wrapper">
            <h2>Een opdracht laten maken?</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem id incidunt omnis repellendus soluta tempore vero! A ab dolorem eos eveniet ipsam iste provident, quos sequi ut, vel voluptate voluptatum?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae explicabo fugit iusto labore, odit officia, omnis quae quidem rem soluta temporibus tenetur, unde. Consectetur eligendi ex fugiat perspiciatis ut?</p>
    </div>
    <div class="parallax">
        <div class="parallax-item">
            <div class="flex-wrapper text-light">
               <h2>Direct <span>beginnen</span>?</h2>
            </div>
            <div class="container text-light">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eaque eos necessitatibus repellat sit? Dolorem possimus quaerat sapiente velit! Dolor eos error eum in ipsa libero non saepe tenetur velit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi architecto assumenda commodi consequuntur delectus dignissimos eius eos est, facere illo itaque laborum, magnam maiores, molestiae nostrum numquam tenetur velit.</p>
                <div class="explanation-button">
                    <button type="button" class="btn btn-primary btn-lg">Opdracht aanmaken -></button>
                </div>
            </div>
        </div>
    </div>
@endsection
