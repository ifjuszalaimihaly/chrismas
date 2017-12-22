@extends('master')
@section('title')
    Áldott karácsonyi ünnepeket kívánok!
@endsection
<body>

@include('nav')

@include('carousel')

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1>Half Slider by Start Bootstrap</h1>
        <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles
            for this template are contained within the
            <code>half-slider.css</code>file.</p>
    </div>
</section>

@include('footer')

<script src="/js/app.js"></script>

</body>

</html>