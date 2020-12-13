@extends('layouts.app')

@section('title','Main page')

@section('content')
@include('layouts._header')

<section class="section section_banner">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="banner_subtitle">
                        Экскурсії
                    </div>
                    <div class="banner_title">
                        Екскурсії Кропивницького 
                        <span>архітектурнаперлина в серці України</span>
                    </div>
                    <div class="banner_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.						</div>
                    <div class="banner_tag">
                        <div class="banner_tag-item"><a href="#">Всі (3)</a></div>
                        <div class="banner_tag-item"><a href="#">Парки (6)</a></div>
                        <div class="banner_tag-item"><a href="#">Історичні (2)</a></div>
                        <div class="banner_tag-item"><a href="#">Для дітей (2)</a></div>
                        <div class="banner_tag-item"><a href="#">Музеї (1)</a></div>
                        <div class="banner_tag-item"><a href="#">Оглядові (10)</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="breadcrumbs" class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb">
                <a href="#" class="main">Головна </a>/<a href="#" class="haschild">Єкскурсії</a>
            </div>
        </div>
    </div>
</div>

<section class="section section_excursion section_page section_catalogPublication">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    Экскурсії
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="filter">
            <div class="filter_input">
                <div class="filter_input-button">
                    <div class="img">
                        <img src="img/calendar.svg" alt="">
                    </div>
                    <div class="text">
                        Дати
                    </div>
                    <div class="arrow">
                        <img src="img/arrow.svg" alt="">
                    </div>
                </div>
                <div class="filter_input-toggle">
                    <div class="filter_toggle-wrapper">
                        <div class="filter_toggle-text">
                            З
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                01
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                01
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                2021
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="filter_toggle-wrapper">
                        <div class="filter_toggle-text">
                            По
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                01
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                01
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                        <div class="filter_toggle-item">
                            <div class="img">
                                <img src="img/arrow-yellow.svg" alt="">
                            </div>
                            <div class="text">
                                2021
                            </div>
                            <div class="img bottom">
                                <img src="img/arrow-yellow-down.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter_input">
                <div class="jq-selectbox jqselect"><select name="" id="">
                    <option value="">
                        1 людина
                    </option>
                    <option value="">
                        2 людини
                    </option>
                    <option value="">
                        3 людини
                    </option>
                    <option value="">
                        4 людини
                    </option>
                    <option value="">
                        5 людей
                    </option>
                </select>
            </div>
            </div>



            <div class="filter_input">
                <div class="jq-selectbox jqselect"><select name="" id="">
                    <option value="">
                        Ціна
                    </option>
                    <option value="">
                        2 людини
                    </option>
                    <option value="">
                        3 людини
                    </option>
                    <option value="">
                        4 людини
                    </option>
                    <option value="">
                        5 людей
                    </option>
                </select>
                </div>
            </div>
            <div class="filter_input">
                <div class="filter_input-input">
                    <input type="text" placeholder="Шукати за описом">
                </div>
                <div class="filter_input-search">
                    <img src="img/search.svg" alt="">
                </div>
            </div>
        </div>
        <div class="subfilter">
            <div class="filter_items">
                <div class="filter_item">
                    <a href="">Популярні</a>
                </div>
                <div class="filter_item">
                    <a href="">за ціною</a>
                </div>
                <div class="filter_item">
                    <a href="">за відгуками</a>
                </div>
            </div>
            <div class="filter_color">
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree">
                            <input type="radio" name="agree" value="true" id="terms-agree" checked="checked" required="">
                            <span class="checkmark"></span>
                            Всі	
                        </label>
                    </div>
                </div>
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree2">
                            <input type="radio" name="agree" value="true" id="terms-agree2" required="">
                            <span class="checkmark"></span>
                            Індивідуальні
                        </label>
                    </div>
                </div>
                <div class="filter_color-item">
                    <div class="filter_color-block">
                        <label for="terms-agree3">
                            <input type="radio" name="agree" value="true" id="terms-agree3" required="">
                            <span class="checkmark"></span>
                            Групові
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="excursion">
        <div class="container">
            <div class="row publication">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="publication_cart">
                        <div class="excursion_img">
                            <img src="img/new.jpg" alt="">
                            <div class="excursion_price">
                                <span>200 грн.</span> за людину
                            </div>
                            <div class="excursion_group">
                                групова
                            </div>
                            <div class="excursion_time">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 13C10.09 13 13 10.09 13 6.5C13 2.91005 10.09 0 6.5 0C2.91005 0 0 2.91005 0 6.5C0 10.09 2.91005 13 6.5 13ZM4.27894 4.15589C4.33009 4.12622 4.38598 4.11211 4.44123 4.11211C4.55345 4.11211 4.66288 4.17039 4.72311 4.2744L6.59206 5.98911L9.95818 2.62299C10.0217 2.5595 10.1049 2.52787 10.1881 2.52787C10.2713 2.52787 10.3545 2.5595 10.418 2.62299C10.5449 2.74975 10.5449 2.95578 10.418 3.08253L6.7524 6.7479C6.75108 6.74921 6.74937 6.74965 6.74805 6.75072C6.72941 6.76893 6.70886 6.78562 6.68523 6.79924C6.67635 6.80446 6.66659 6.80661 6.65727 6.81072C6.64819 6.81482 6.6397 6.81852 6.63042 6.82199C6.59509 6.83454 6.55892 6.84302 6.52275 6.84302C6.48526 6.84302 6.44909 6.83434 6.4142 6.82179C6.40551 6.81876 6.3975 6.8155 6.38906 6.81159C6.35416 6.79578 6.32146 6.77586 6.29349 6.74809C6.2933 6.74789 6.29306 6.7479 6.29286 6.74766C6.29198 6.74678 6.29178 6.7455 6.2909 6.74463C6.27226 6.72555 6.25517 6.70455 6.24127 6.68049L4.1604 4.59962C4.07053 4.4445 4.12359 4.24556 4.27894 4.15589Z" fill="#D6B247"></path>
                                </svg>
                                1 год 
                            </div>
                        </div>
                        <div class="excursion_guide">
                            <div class="excursion_person">
                                <img src="img/guid.jpg" alt="">
                                <span>Іванка</span>
                            </div>
                            <div class="excursion_rate">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3997 5.29434L9.16747 4.95035L7.19698 0L5.2265 4.95035L0 5.29434L4.00869 8.69813L2.69325 13.8615L7.19698 11.0147L11.7007 13.8615L10.3853 8.69813L14.3997 5.29434Z" fill="#CCCCCC"></path>
                                </svg>
                                <span>9 відгуків</span>
                            </div>
                        </div>
                        <div class="publication_post">
                            <div class="publication_title">
                                Название статьи
                            </div>
                            <div class="publication_date">
                                20.11.2020
                            </div>
                        </div>
                        <div class="publication_text">
                            Равным образом сложившаяся структура организации играет важную роль в формировании дальнейших направлений развития.
                        </div>
                        <div class="publication_read">
                            <a href="#">Читать
                                 <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8861 0.385742L10.2179 1.05392L13.1912 4.02719H0V4.97215H13.1912L10.2179 7.94538L10.8861 8.61356L15 4.49964L10.8861 0.385742Z" fill="#1B1B1B"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pagination" class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
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