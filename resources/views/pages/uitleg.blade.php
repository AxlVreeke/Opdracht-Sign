@extends('base')
{{--@php--}}
{{--$color = '#69197c';--}}
{{--@endphp--}}
@section('content')
    <div class="container">
        <div class="row">
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">9.5 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">Sign is oprecht een banger</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">9 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">Sign pogchamp</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">7.5 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">cool</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <ul class="ul-title darkpurple-color">
                <li>UITLEG</li>
            </ul>
            <div class="explanation-content">
                <h2>Start uw eigen schoolproject</h2>
                <h3>Het duurt slechts enkele minuten!</h3>
                <div class="row">
                    <div class="explanation-images">
                        <div class="col d-flex justify-content-center">
                            <img src="img/school.jpg" alt="schoolfoto 1">
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img src="img/school2.jpg" alt="schoolfoto 2">
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img src="img/school3.jpg" alt="schoolfoto 3">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem eum molestiae officiis omnis qui quos. Accusamus dolore ea eaque ex excepturi nam reiciendis voluptates voluptatum. Iure sequi ut vel.</p>
                    </div>
                    <div class="col text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur deleniti deserunt dignissimos distinctio, doloremque enim eos fugit iure labore libero minima nesciunt nobis optio, quos rem repudiandae tempora vero!</p>
                    </div>
                    <div class="col text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam asperiores at consequatur cum delectus doloribus eos facilis fugit libero minus, molestiae nemo quis, reiciendis rerum, tempore totam velit voluptatum.</p>
                    </div>
                </div>
                <div class="explanation-info">
                    <p><img src="img/school4.jpg" alt="schoolfoto 4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi dolorem, est eum eveniet expedita facilis fugit illo incidunt iure maxime nihil, qui recusandae repellat repellendus repudiandae similique sit velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores excepturi id labore maxime officia, pariatur reiciendis suscipit veritatis. Dignissimos iusto nam odit suscipit! A aliquam architecto aut ea natus sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae eius esse quam similique! Accusamus, at, debitis dolor facere impedit in mollitia nisi placeat possimus repellat repudiandae saepe tenetur velit?</p>
                </div>
                <div class="explanation-button">
                    <a class="btn btn-secondary darkpurple" href="{{route('exercises.create')}}" role="button">Opdracht aanmaken -></a>
                </div>
            </div>
        </div>
    </div>
@endsection

