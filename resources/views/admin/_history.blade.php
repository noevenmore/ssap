<form action="{{$link}}" method="POST">
    @csrf

    <div class="form-group">
        <label><strong>Ссылка при нажатии на кнопку "Подробнее"</strong></label>
        <input type="text" name="main_link" class="form-control" placeholder="Введите ссылку..." value="{{isset($main_link->value)?$main_link->value:''}}">
    </div>

    <div class="form-group">
        <label><strong>Изображение:</strong> (если загружено несколько то показывается первое)</label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="main"></div>
    </div>

    <div class="form-group">
        <label><strong>Категория с фильтром для ссылки №1 (если нужна вся категория создайте фильтр с пустым значением):</strong></label>
        <select class="form-control" name="main_link1">
            <option value="0">Не выбрано</option>

            @foreach ($filters as $c)
                <option value="{{$c->id}}" {{isset($main_link1->value)&&$main_link1->value==$c->id?'selected':''}}>{{$c->name.' ['.$c->category_link.'='.$c->value.']'}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Категория с фильтром для ссылки №2 (если нужна вся категория создайте фильтр с пустым значением):</strong></label>
        <select class="form-control" name="main_link2">
            <option value="0">Не выбрано</option>

            @foreach ($filters as $c)
                <option value="{{$c->id}}" {{isset($main_link2->value)&&$main_link2->value==$c->id?'selected':''}}>{{$c->name.' ['.$c->category_link.'='.$c->value.']'}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Категория с фильтром для ссылки №3 (если нужна вся категория создайте фильтр с пустым значением):</strong></label>
        <select class="form-control" name="main_link3">
            <option value="0">Не выбрано</option>

            @foreach ($filters as $c)
                <option value="{{$c->id}}" {{isset($main_link3->value)&&$main_link3->value==$c->id?'selected':''}}>{{$c->name.' ['.$c->category_link.'='.$c->value.']'}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>