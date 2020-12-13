@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="#" class="main">Головна </a>/<a href="#" class="haschild">Фотогаллерея</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_gallery section_page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    Фотогаллерея
                </div>
            </div>
        </div>
    </div>
    <div class="container gallery">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="gallery_filter">
                    <div class="gallery_title">
                        Фильтр
                    </div>
                    <div class="gallery_year">
                        <a href="#">Год 2020</a>
                        <a href="#">Год 2019</a>
                        <a href="#">Год 2018</a>
                    </div>
                    <div class="br"></div>
                    <div class="gallery_arhive">
                        <a href="#">Архивы</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="gallery_img">
                            <img src="img/Rectangle179.jpg" alt="">
                            <div class="gallery_views">
                                <span>Посмотреть фото</span>
                                <div class="br"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pagination" class="container">
        <div class="row">
            <div class="col-lg-3 col-12"></div>
            <div class="col-lg-9 col-md-12">
                <div class="pagination">
                    <ul>
                        <li><a class="pagination_link" href="#">1</a></li>
                        <li><a class="pagination_link" href="#">2</a></li>
                        <li><a class="pagination_link" href="#">3</a></li>
                        <li><a class="pagination_link" href="#">...</a></li>
                        <li><a class="pagination_link" href="#">12</a></li>
                        <li>
                            <a href="#" class="pagination_arow"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L1 9" stroke="white"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts._footer')
@endsection