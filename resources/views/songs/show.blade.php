@extends('master')
@section('title')
    Áldott karácsonyi ünnepeket kívánok!
@endsection
<body>

@include('nav')


<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">{{$song->number}} - {{$song->title}}
    </h1>
    <h2 class="my-3">{{$song->title_original}}</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="h-100">
                <a href="#"><img class="card-img-top img-responsive song-image" src="/img/sheet-music/{{$song->sheet_music}}" alt=""></a>
                <div>
                    <p class="card-text">{{$song->text}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{$song->youtube}}" frameborder="0"
                    gesture="media" allow="encrypted-media" allowfullscreen></iframe>

        </div>
    </div>
</div>

@include('footer')

<script src="/js/app.js"></script>

</body>

</html>