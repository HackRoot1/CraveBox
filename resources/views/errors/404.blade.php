@extends('layouts.main')
@section('main-content')
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="../assets/images/img/5.png" alt=""></span>
        <span class="b-shape-2"><img src="../assets/images/img/6.png" alt=""></span>
        <span class="b-shape-3"><img src="../assets/images/img/7.png" alt=""></span>
        <span class="b-shape-4"><img src="../assets/images/img/9.png" alt=""></span>
        <span class="b-shape-5"><img src="../assets/images/shapes/18.png" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="../assets/images/img/7.png" alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb text-center">
                <h2 class="page-title">404</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home </a>/<a href="index.html">pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">404 page</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- 404 area -->
<div class="error-area padding-top-120 padding-bottom-120">
    <div class="error-shapes">
        <span class="e-s-1"><img src="../assets/images/shapes/16.png" alt=""></span>
        <span class="e-s-2"><img src="../assets/images/img/32.png" alt=""></span>
    </div>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="error-wrapper text-center">
            <img class="item-bounce" src="../assets/images/img/404.png" alt="">
            <a href="index.html" class="btn margin-top-40">go to home</a>
        </div>
    </div>
</div>

@endsection
