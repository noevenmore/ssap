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

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show" {{isset($is_show)&&!$is_show?'':'checked'}}>
        <label class="form-check-label">Показывать фильтр пользователю</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show_phones" {{isset($is_show_phones)&&!$is_show_phones?'':'checked'}}>
        <label class="form-check-label">Показывать телефоны</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show_worktimes" {{isset($is_show_worktimes)&&!$is_show_worktimes?'':'checked'}}>
        <label class="form-check-label">Показывать время работы</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_can_comment" {{isset($is_can_comment)&&!$is_can_comment?'':'checked'}}>
        <label class="form-check-label">Можно оставлять комментарии</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show_link" {{isset($is_show_link)&&!$is_show_link?'':'checked'}}>
        <label class="form-check-label">Показывать ссылку на booking.com</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_redirect_one" {{isset($is_redirect_one)&&!$is_redirect_one?'':'checked'}}>
        <label class="form-check-label">Переходить сразу к ноду если кроме него ничего нет</label>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>