<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>

    <div class="form-group">
        <label><strong>Фильтр для категории:</strong></label>
        <select class="form-control" name="category_link">
            <option value="">Не выбрано</option>

            @foreach ($categorys as $c)
                <option value="{{$c->link}}" {{isset($category_link)&&$category_link==$c->link?'selected':''}}>{{$c->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Значение в строке браузера: (английский, без пробелов и спецзнаков)</strong></label>
        <input type="text" name="value" maxlength="32" class="form-control" placeholder="Введите текст..." value="{{isset($value)?$value:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (украинский)</strong></label>
        <input type="text" name="name" maxlength="64" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (английский)</strong></label>
        <input type="text" name="name_eng" maxlength="64" class="form-control" placeholder="Введите название..." value="{{isset($name_eng)?$name_eng:''}}">
    </div>


    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>