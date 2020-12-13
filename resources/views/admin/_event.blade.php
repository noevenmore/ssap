<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>

    <div class="form-group">
        <label><strong>Тип:</strong></label>
        <select class="form-control" name="type">
            <option value="festival" {{isset($type)&&$type=='festival'?'selected':''}}>Фестиваль</option>
            <option value="show" {{isset($type)&&$type=='show'?'selected':''}}>Выставка</option>
            <option value="concert" {{isset($type)&&$type=='concert'?'selected':''}}>Концерт</option>
            <option value="sport" {{isset($type)&&$type=='sport'?'selected':''}}>Спорт</option>
            <option value="conference" {{isset($type)&&$type=='conference'?'selected':''}}>Конференция</option>
            <option value="other" {{isset($type)&&$type=='other'?'selected':''}}>Другое</option>
        </select>
    </div>

    <div class="form-group">
        <label><strong>Название:</strong></label>
        <input type="text" name="name" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}">
    </div>

    <div class="form-group">
        <label><strong>Адресс:</strong></label>
        <input type="text" name="addr" class="form-control" placeholder="Введите адресс..." value="{{isset($addr)?$addr:''}}">
    </div>

    <div class="form-group">
        <label><strong>Полное описание:</strong></label>
        <textarea name="text" id="summernote">{{isset($text)?$text:''}}</textarea>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show" {{isset($is_show)&&!$is_show?'':'checked'}}>
        <label class="form-check-label">Показывать событие</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_main" {{isset($is_main)&&$is_main?'checked':''}}>
        <label class="form-check-label">Показывать на главной</label>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>