<section class="section_form">
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form_title">
                        {{__('Leave your e-mail')}}, <br>
                        {{__('to stay up to date')}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <form onsubmit="return subscribeEmail();" id="subscribe_form" class="form_subscription">
                        <input id="subscribe_email" name="email" type="email" required="@" class="form_input" placeholder="{{__('Your E-mail')}}">

                        <button type="submit" class="form_button">
                            {{__('Subscribe')}}
                        </button>
                    </form>

                    <div id="email_sub_done" class="form_title" style="display: none;">
                    {{__('Done!')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@isset($system_var_weather_day0)
<section class="section section_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="weather">
                    <div class="weather_img">
                        <img src="/img/cloud.svg" alt="">
                    </div>
                    <span class="weather_day">{{$system_var_weather_day0>0?'+'.$system_var_weather_day0:$system_var_weather_day0}}°/{{$system_var_weather_day1>0?'+'.$system_var_weather_day1:$system_var_weather_day1}}°</span>
                    <span class="weather_night">{{$system_var_weather_night0>0?'+'.$system_var_weather_night0:$system_var_weather_night0}}°/{{$system_var_weather_night1>0?'+'.$system_var_weather_night1:$system_var_weather_night1}}°</span>
                </div>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <div class="coin">
                    <div class="coin_uah">
                        <div class="coin_img">
                            <img src="/img/ua.svg" alt="">
                        </div>
                        <span>UAH {{$system_var_eur}}</span>
                    </div>
                    <div class="coin_eu">
                        <div class="coin_img">
                            <img src="/img/eu.svg" alt="">
                        </div>
                        <span>EUR 1</span>
                    </div>
                    <div class="coin_uah">
                        <div class="coin_img">
                            <img src="/img/ua.svg" alt="">
                        </div>
                        <span>UAH {{$system_var_usd}}</span>
                    </div>
                    <div class="coin_eu">
                        <div class="coin_img">
                            <img src="/img/usd.svg" alt="">
                        </div>
                        <span>USD 1</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="date">
                    <span>{{$system_var_time_now->format('d.m.Y')}}</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="social">
                    <a href="{{$system_var_facebook}}">
                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.17432 3.32083H10V0.140833C9.68503 0.0975 8.60178 0 7.34022 0C4.70794 0 2.90476 1.65583 2.90476 4.69917V7.5H0V11.055H2.90476V20H6.46613V11.0558H9.2534L9.69586 7.50083H6.4653V5.05167C6.46613 4.02417 6.74277 3.32083 8.17432 3.32083Z" fill="#502B1F"/>
                        </svg>
                    </a>
                    <a href="{{$system_var_instagram}}">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.6689 0H4.33105C1.94287 0 0 1.94287 0 4.33105V11.6691C0 14.0571 1.94287 16 4.33105 16H11.6691C14.0571 16 16 14.0571 16 11.6691V4.33105C16 1.94287 14.0571 0 11.6689 0V0ZM8 12.3749C5.58765 12.3749 3.62512 10.4124 3.62512 8C3.62512 5.58765 5.58765 3.62512 8 3.62512C10.4124 3.62512 12.3749 5.58765 12.3749 8C12.3749 10.4124 10.4124 12.3749 8 12.3749ZM12.4795 4.65686C11.7666 4.65686 11.1868 4.07703 11.1868 3.36414C11.1868 2.65125 11.7666 2.07129 12.4795 2.07129C13.1924 2.07129 13.7723 2.65125 13.7723 3.36414C13.7723 4.07703 13.1924 4.65686 12.4795 4.65686Z" fill="#502B1F"/>
                            <path d="M7.99939 4.56348C6.10437 4.56348 4.5625 6.10522 4.5625 8.00037C4.5625 9.89539 6.10437 11.4373 7.99939 	11.4373C9.89453 11.4373 11.4363 9.89539 11.4363 8.00037C11.4363 6.10522 9.89453 4.56348 7.99939 4.56348Z" fill="#502B1F"/>
                            <path d="M12.4797 3.00977C12.2842 3.00977 12.125 3.16895 12.125 3.3645C12.125 3.56006 12.2842 3.71924 12.4797 3.71924C12.6754 3.71924 12.8346 3.56018 12.8346 3.3645C12.8346 3.16882 12.6754 3.00977 12.4797 3.00977Z" fill="#502B1F"/>
                        </svg>
                    </a>
                    <a href="{{$system_var_telegram}}">
                        <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.24023 11.8632L7.89285 16.8888C8.38986 16.8888 8.60511 16.6692 8.86324 16.4055L11.1934 14.115L16.0218 17.7519C16.9073 18.2595 17.5312 17.9922 17.7701 16.914L20.9394 1.63926L20.9403 1.63836C21.2212 0.291963 20.4669 -0.234534 19.6041 0.0957645L0.974929 7.43163C-0.296476 7.93922 -0.277226 8.66822 0.758799 8.99852L5.52154 10.5222L16.5844 3.40235C17.1051 3.04775 17.5785 3.24395 17.1891 3.59855L8.24023 11.8632Z" fill="#502B1F"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endisset
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-12 col-md-4 col-sm-12">
                <div class="footer_logo">
                    <img src="/img/logo.png" alt="">
                </div>
            </div>




        @isset($menu_items)
        @foreach ($menu_items as $mi)
            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="footer_title">
                    <a href="
                        @include('layouts._link',['obj'=>$mi])
                    ">{{ $system_var_lang=="ua"?$mi->name:$mi->name_eng }}</a>
                </div>

                @if (count($mi->childrens))
                        @foreach ($mi->childrens as $ch)
                        <p class="m-0"><a href="
                            @include('layouts._link',['obj'=>$ch])
                            ">{{ $system_var_lang=="ua"?$ch->name:$ch->name_eng }}</a></p>
                        @endforeach
                @endif
            </div>
        @endforeach
        @endisset

        @isset($system_var_email)
            <ul>
                <li class="mail">{{__('Contact us')}}
                    <a>{{$system_var_email}}</a>
                </li>
            </ul>
        @endisset

        </div>
    </div>
    <div class="copyrightn">
        <span>© 2020 "Logo"  Создание сайта - </span>
    </div>
</footer>