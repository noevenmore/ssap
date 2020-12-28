<p class="my-0"><a class="btn btn-sm btn-primary w-100" href="{{route('index')}}">На сайт</a></p>
<p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_index')}}">Админ панель</a></p>

<p class="mb-1 mt-3"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_comments_show')}}">Редактор комментариев</a></p>
<p class="mb-1 mt-3"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_orders_show')}}">Редактор заявок</a></p>


<div onclick="toggleMenu(3)" class="btn btn-sm btn-success w-100 mt-2">Юниты</div>
<div id="menu_items_3" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_hotel_show')}}">Просмотр юнитов</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_hotel_add')}}">Добавить юнит</a></p>

    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_type_show')}}">Просмотр категорий юнитов</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_type_add')}}">Добавить категорию юнитов</a></p>
    
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_filter_show')}}">Просмотр фильтров юнитов</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_filter_add')}}">Добавить фильтр юнитов</a></p>
</div>

<div onclick="toggleMenu(5)" class="btn btn-sm btn-success w-100 mt-2">События</div>
<div id="menu_items_5" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_event_show')}}">Просмотр событий</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_event_add')}}">Добавить событие</a></p>
</div>

<div onclick="toggleMenu(4)" class="btn btn-sm btn-success w-100 mt-2">Экскурсии</div>
<div id="menu_items_4" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_excursion_show')}}">Просмотр экскурсий</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_excursion_add')}}">Добавить экскурсии</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_excursion_map_show')}}">Добавить карту маршрута</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_excursion_filter_show')}}">Просмотр фильтров экскурсий</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_excursion_filter_add')}}">Добавить фильтр экскурсии</a></p>
</div>


<div onclick="toggleMenu(7)" class="btn btn-sm btn-success w-100 mt-2">Текста</div>
<div id="menu_items_7" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_text_show')}}">Просмотр текстов</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_text_add')}}">Добавить текста</a></p>
</div>


<div onclick="toggleMenu(11)" class="btn btn-sm btn-success w-100 mt-2">Меню</div>
<div id="menu_items_11" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_menu_item_show')}}">Просмотр меню</a></p>    
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_menu_item_add')}}">Добавить меню</a></p>
</div>

<p class="mb-1 mt-3"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_add_to_gallery')}}">Добавить в фотогалерею</a></p>

<div onclick="toggleMenu(12)" class="btn btn-sm btn-success w-100 mt-2">Система</div>
<div id="menu_items_12" class="w-100" style="display: none;">
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_change_main_image')}}">Редактор изображений на главной</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_mp_title_show')}}">Просмотр надписей на главной</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_mp_title_add')}}">Добавить надпись на главной</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_main_page_link_editor')}}">Редактор ссылок на главной странице</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_system_text_show')}}">Редактор системных текстов</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_var_editor_show')}}">Редактор ссылок</a></p>
    <p class="my-1"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_show_gallery')}}">Редактор фотографий</a></p>
</div>


<p class="mb-1 mt-3"><a class="btn btn-sm btn-primary w-100" href="{{route('admin_mailing')}}">Рассылка e-mail</a></p>
