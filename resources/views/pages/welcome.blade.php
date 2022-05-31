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
        <div class="text-wrapper">
            <div class="text-wrapper-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem id incidunt omnis repellendus soluta tempore vero! A ab dolorem eos eveniet ipsam iste provident, quos sequi ut, vel voluptate voluptatum?</p>
            </div>
            <div class="text-wrapper-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae explicabo fugit iusto labore, odit officia, omnis quae quidem rem soluta temporibus tenetur, unde. Consectetur eligendi ex fugiat perspiciatis ut?</p>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="parallax-item">
            <div class="flex-wrapper text-light">
               <h2>Direct <span>beginnen</span>?</h2>
            </div>
            <div class="container">
                <div class="text-wrapper">
                    <div class="text-wrapper-text text-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eaque eos necessitatibus repellat sit? Dolorem possimus quaerat sapiente velit! Dolor eos error eum in ipsa libero non saepe tenetur velit.</p>
                    </div>
                    <div class="text-wrapper-text text-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi architecto assumenda commodi consequuntur delectus dignissimos eius eos est, facere illo itaque laborum, magnam maiores, molestiae nostrum numquam tenetur velit.</p>
                    </div>
                </div>
                <div class="main-info-button-wrapper">
                    <a class="btn show-info-button" href="../opdrachten" role="button">Opdracht kiezen -></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="flex-wrapper">
            <h2>Lorem <span>ipsum</span></h2>
        </div>
        <div class="full-design-wrapper">
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Raambelettering</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=1')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Autobelettering</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=2')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Spandoek</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=3')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Kledingbedrukking</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=4')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Interieurwrap</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=5')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Vloerstickers</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=6')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Stickers</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=7')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Lichtbak</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=8')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
        </div>

        <div class="home-design-button">
            <button id="showElement" class="btn btn-secondary navy">Meer info?</button>
        </div>

        <div id="fullDesign" class="full-design-info">
            <div class="full-design-left">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ea esse expedita iusto omnis optio pariatur perferendis repudiandae tenetur veritatis. Aspernatur consequatur doloremque, hic quasi repellendus sint tempora tenetur voluptatem!</p>
            </div>
            <div class="full-design-right">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate eaque eligendi eos labore sint tempora vero voluptatum? A nihil nulla obcaecati? Eaque eligendi esse est ipsa nostrum, repellendus voluptates.</p>
            </div>
            <div class="full-design-left">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ea esse expedita iusto omnis optio pariatur perferendis repudiandae tenetur veritatis. Aspernatur consequatur doloremque, hic quasi repellendus sint tempora tenetur voluptatem!</p>
            </div>
            <div class="full-design-right">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="../img/placeholder-icon.svg" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate eaque eligendi eos labore sint tempora vero voluptatum? A nihil nulla obcaecati? Eaque eligendi esse est ipsa nostrum, repellendus voluptates.</p>
            </div>
        </div>
    </div>

@endsection
