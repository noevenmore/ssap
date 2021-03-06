<header class="header {{isset($is_main_page)?'':'header--page'}} showoverflow">
    <div class="header_wrapper showoverflow z1000">
        <div class="header_logo">
            <a href="/"><img src="/img/logo.png" alt=""></a>
        </div>
        <nav class="header_nav nav showoverflow">
            <ul class="header_menu">
                <div class="m-auto dropdown">
                    <a href="{{route('excursion_list')}}" class="dropbtn">{{__('Explore')}}</a>
                    <div class="dropdown-content">
                        <a href="{{route('node_list',['type'=>'museum'])}}">{{__('Museums')}}</a>
                        <a href="{{route('node_list',['type'=>'gallery'])}}">{{__('Galleries')}}</a>
                        <a href="{{route('node_list',['type'=>'park'])}}">{{__('Parks')}}</a>
                        <a href="{{route('node_list',['type'=>'history_val'])}}">{{__('Historical shafts')}}</a>
                        <a href="{{route('node_list',['type'=>'architecture'])}}">{{__('Masterpieces of architecture')}}</a>
                        <a href="{{route('node_list',['type'=>'monument'])}}">{{__('Monuments')}}</a>
                        <a href="{{route('node_list',['type'=>'temple'])}}">{{__('Temples')}}</a>
                        <a href="{{route('excursion_list')}}">{{__('Tourist routes')}}</a>
                        <a href="/">{{__('Book excursions')}}</a>
                        <a href="{{route('node_list',['type'=>'entertainment'])}}">{{__('Entertainment')}}</a>
                    </div>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('index')}}" class="dropbtn">{{__('Where to eat')}}</a>
                    <div class="dropdown-content">
                        <a href="{{route('node_list',['type'=>'cafe'])}}">{{__('Cafe')}}</a>
                        <a href="{{route('node_list',['type'=>'restaurant'])}}">{{__('Restaurants')}}</a>
                        <a href="{{route('node_list',['type'=>'coffe'])}}">{{__('Coffee shops')}}</a>
                        <a href="#">{{__('Food delivery')}}</a>
                    </div>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('node_list',['type'=>'hotel'])}}" class="dropbtn">{{__('Hotels')}}</a>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('index')}}" class="dropbtn">{{__('Events')}}</a>
                    <div class="dropdown-content">
                        <a href="#">{{__('Festivals')}}</a>
                        <a href="#">{{__('Exhibitions')}}</a>
                        <a href="#">{{__('Concerts')}}</a>
                        <a href="#">{{__('Sport')}}</a>
                        <a href="#">{{__('Conferences')}}</a>
                        <a href="#">{{__('Other')}}</a>
                    </div>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('index')}}" class="dropbtn">{{__('About the city')}}</a>
                    <div class="dropdown-content">
                        <a href="#">{{__('History of the city and interesting facts')}}</a>
                        <a href="#">{{__('Legends of our city')}}</a>
                        <a href="#">{{__('Famous people of our city')}}</a>
                    </div>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('index')}}" class="dropbtn">{{__('Urgent Services')}}</a>
                    <div class="dropdown-content">
                        <a href="#">{{__('Tourist Safety')}}</a>
                        <a href="#">{{__('Publications')}}</a>
                        <a href="#">{{__('Travel agencies')}}</a>
                    </div>
                </div>

                <div class="m-auto dropdown">
                    <a href="{{route('photogallery')}}" class="dropbtn">{{__('Photo Gallery')}}</a>
                    <div class="dropdown-content">
                        <a href="{{route('photogallery',['tag'=>'spring'])}}">{{__('Spring Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'summer'])}}">{{__('Summer Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'winter'])}}">{{__('Winter Kropyvnytskyi')}}</a>
                        <a href="{{route('photogallery',['tag'=>'autumn'])}}">{{__('Autumn Kropyvnytskyi')}}</a>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="header_search">
            <div class="dropdown m-auto">
                <a class="dropbtn">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.6215 28.7951L21.8059 19.9795C23.5135 17.8702 24.5416 15.19 24.5416 12.2709C24.5416 5.5051 19.0365 0 12.2708 0C5.50504 0 0 5.50504 0 12.2708C0 19.0365 5.5051 24.5416 12.2709 24.5416C15.19 24.5416 17.8702 23.5135 19.9795 21.8059L28.7951 30.6215C29.047 30.8734 29.3776 31 29.7084 31C30.0391 31 30.3697 30.8734 30.6216 30.6215C31.1266 30.1165 31.1266 29.3001 30.6215 28.7951ZM12.2709 21.9583C6.9285 21.9583 2.58335 17.6131 2.58335 12.2708C2.58335 6.92844 6.9285 2.58329 12.2709 2.58329C17.6132 2.58329 21.9584 6.92844 21.9584 12.2708C21.9584 17.6131 17.6131 21.9583 12.2709 21.9583Z" fill="white"></path>
                    </svg>
                </a>
                <div class="dropdown-content">
                    <form action="{{route('search')}}">
                        <input class="searchline" type="text" placeholder="{{__('Search on the site')}}">
                    </form>
                  </div>
            </div>

        </div>
        <div class="header_heart">
            <a href="#">
                <svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.5658 16.0462L33.5659 16.0462C33.5744 16.0382 33.5829 16.0302 33.5913 16.0224C33.6479 15.9693 33.7008 15.9198 33.7498 15.8651C33.7659 15.8407 33.7838 15.8173 33.8027 15.7953M33.5658 16.0462L33.8786 15.8605M33.5658 16.0462L33.5641 16.0479M33.5658 16.0462L33.5641 16.0479M33.8027 15.7953C33.8028 15.7953 33.8028 15.7953 33.8028 15.7953L33.8786 15.8605M33.8027 15.7953C33.8027 15.7954 33.8026 15.7955 33.8025 15.7956L33.8786 15.8605M33.8027 15.7953C35.0466 14.3373 35.7333 12.4263 35.7333 10.4144C35.7333 6.13929 32.6823 2.6837 28.9583 2.6837C27.1245 2.6837 25.4121 3.86574 24.144 5.07334C22.8796 6.27756 22.0766 7.48827 22.0626 7.50958M33.8786 15.8605C35.1389 14.3834 35.8333 12.449 35.8333 10.4144C35.8333 6.09669 32.7494 2.5837 28.9583 2.5837C25.21 2.5837 22.0111 7.40602 21.9791 7.45458M22.0626 7.50958C22.0626 7.50954 22.0626 7.50949 22.0627 7.50945L21.9791 7.45458M22.0626 7.50958C21.9195 7.72744 21.6697 7.83081 21.4285 7.83081C21.1873 7.83081 20.9374 7.7274 20.7944 7.50945L20.878 7.45458M22.0626 7.50958L21.9791 7.45458M21.9791 7.45458H20.878M20.878 7.45458L20.7945 7.50958M20.878 7.45458L20.7945 7.50958M33.5641 16.0479L21.4279 28.0099L10.0104 16.7706C9.96801 16.6929 9.91095 16.6224 9.84261 16.5632L9.84237 16.563M33.5641 16.0479L9.84237 16.563M9.84237 16.563C8.11578 15.0759 7.12374 12.8356 7.12374 10.4144M9.84237 16.563L7.12374 10.4144M7.12374 10.4144C7.12374 6.13923 10.1747 2.6837 13.8987 2.6837M7.12374 10.4144L13.8987 2.6837M13.8987 2.6837C15.7326 2.6837 17.445 3.86574 18.713 5.07334M13.8987 2.6837L18.713 5.07334M18.713 5.07334C19.9775 6.27756 20.7804 7.48827 20.7945 7.50958M18.713 5.07334L20.7945 7.50958M8.78417 17.6693L8.78424 17.6693L20.8961 29.5914L20.8962 29.5915C21.0435 29.7361 21.2359 29.8087 21.4285 29.8087C21.6211 29.8087 21.8142 29.7361 21.9617 29.5907L21.8915 29.5195L21.9617 29.5907L34.4753 17.2522L34.4763 17.2511L34.6034 17.1295C34.6036 17.1293 34.6037 17.1292 34.6039 17.129C34.7062 17.0338 34.8088 16.9358 34.9236 16.8106C34.9747 16.7605 35.0175 16.7043 35.0513 16.6434C36.4664 14.9304 37.2428 12.724 37.2428 10.4144C37.2428 5.33985 33.5365 1.19199 28.9583 1.19199C27.1847 1.19199 25.5723 2.00404 24.2623 2.99766C23.0088 3.94846 22.0239 5.07169 21.4285 5.83044C20.8332 5.07169 19.8483 3.94846 18.5947 2.99766C17.2847 2.00404 15.6723 1.19199 13.8987 1.19199C9.32063 1.19199 5.61423 5.33985 5.61423 10.4144C5.61423 13.1801 6.72518 15.7605 8.67336 17.5304C8.70446 17.5809 8.74166 17.6273 8.78417 17.6693Z" fill="white" stroke="white" stroke-width="0.2"></path>
                    <path d="M27.8572 6.34082C29.2857 6.34082 32.8572 9.86355 32.1429 12.6817" stroke="#F5A623"></path>
                </svg>
            </a>
        </div>

        <div class="dropdown m-auto">
            <a class="dropbtn">{{__('m.locale')}}</a>
            <div class="dropdown-content">
                <a href="{{route('set_lang_en')}}">ENG</a>
                <a href="{{route('set_lang_ua')}}">УКР</a>
              </div>
        </div>

        <div class="wrap_mnu">
            <div class="toggle_mnu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @isset($is_main_page)
        @include('layouts._main_header')
    @endisset
</header>