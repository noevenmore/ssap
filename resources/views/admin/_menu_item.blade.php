<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>
    
    <div class="form-group">
        <label><strong>Родительская категория меню:</strong></label>
        <select class="form-control" name="parent_id">
            <option value="0">Нет</option>

            @foreach ($menu_items as $c)
                @if ($c->parent_id==0 && (!isset($id) || (isset($id)&&$id!=$c->id)))
                    <option value="{{$c->id}}" {{isset($parent_id)&&$parent_id==$c->id?'selected':''}}>{{$c->name}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Ссылка на:</strong></label>
        <select class="form-control" name="link_type">
            <option value="">Не выбрано</option>
            <option value="index" {{(isset($link_type)&&$link_type=='index')?'selected':''}}>Главную страницу</option>
            <option value="category" {{(isset($link_type)&&$link_type=='category')?'selected':''}}>Категорию (с фильтром)</option>
            <option value="text" {{(isset($link_type)&&$link_type=='text')?'selected':''}}>Текст</option>
            <option value="excursions" {{(isset($link_type)&&$link_type=='excursions')?'selected':''}}>Страница со списком экскурсий</option>
            <option value="excursion_get" {{(isset($link_type)&&$link_type=='excursion_get')?'selected':''}}>Страница заказов экскурсий</option>
            <option value="gallery" {{(isset($link_type)&&$link_type=='gallery')?'selected':''}}>Галлерея</option>
            <option value="gallery_winter" {{(isset($link_type)&&$link_type=='gallery_winter')?'selected':''}}>Галлерея (зима)</option>
            <option value="gallery_spring" {{(isset($link_type)&&$link_type=='gallery_spring')?'selected':''}}>Галлерея (весна)</option>
            <option value="gallery_summer" {{(isset($link_type)&&$link_type=='gallery_summer')?'selected':''}}>Галлерея (лето)</option>
            <option value="gallery_autumn" {{(isset($link_type)&&$link_type=='gallery_autumn')?'selected':''}}>Галлерея (осень)</option>
        </select>
    </div>

    <div class="form-group">
        <label><strong>Категория с фильтром (если нужна вся категория создайте фильтр с пустым значением):</strong></label>
        <select class="form-control" name="filter_id">
            <option value="0">Не выбрано</option>

            @foreach ($filters as $c)
                <option value="{{$c->id}}" {{isset($filter_id)&&$filter_id==$c->id?'selected':''}}>{{$c->name.' ['.$c->category_link.'='.$c->value.']'}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Текст:</strong></label>
        <select class="form-control" name="text_id">
            <option value="0">Не выбрано</option>

            @foreach ($texts as $c)
                <option value="{{$c->id}}" {{isset($text_id)&&$text_id==$c->id?'selected':''}}>{{$c->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Название: (украинский)</strong></label>
        <input type="text" name="name" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (английский)</strong></label>
        <input type="text" name="name_eng" class="form-control" placeholder="Введите название..." value="{{isset($name_eng)?$name_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Позиция (выше значение - первее):</strong></label>
        <input type="number" name="position" class="form-control" placeholder="Введите..." value="{{isset($position)?$position:''}}">
    </div>

    <!--
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_main" {{isset($is_main)&&!$is_main?'':'checked'}}>
        <label class="form-check-label">Является главным</label>
    </div>
-->

    <button class="btn btn-primary" type="submit">OK</button>
</form>