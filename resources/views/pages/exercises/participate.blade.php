<div style="margin-top: 50px" class="container">

    @if( !$exercise->isStudentRegistered( auth()->user()->id ) )
        <div class="main-title">DEELNEMEN AAN {{$exercise->name}}</div>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if( $exercise->end_date > Date('Y-m-d') )
            <form method="post" action="{{route('giveexercises.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="form-group row">
                   <label style="font-weight: bold" for="information" class="col-sm-2 col-form-label">Informatie:</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="description" maxlength="255" placeholder="vul hier informatie in" cols="30" rows="10"></textarea>
                        <div id="count" class="char-amount">255</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="font-weight: bold" for="file" class="col-sm-2 col-form-label">Upload bestand:</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" class="form-control" id="file" value="">
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
                    <input class="mt-4 btn btn-primary" onclick="return clicked();" type="submit" value="Opslaan">
                </div>
            </form>
        @else
            <p>Deze opdracht is expired!</p>
        @endif
    @else
        <p class="alert alert-danger">Je hebt al iets ingeleverd bij deze opdracht...</p>
    @endif
</div>
<script src="../../js/char-countdown.js"></script>

<?php
