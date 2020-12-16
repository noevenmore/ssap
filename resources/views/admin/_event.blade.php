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
        <label><strong>Название: (украинский)</strong></label>
        <input type="text" name="name" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (английский)</strong></label>
        <input type="text" name="name_eng" class="form-control" placeholder="Введите название..." value="{{isset($name_eng)?$name_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Цена: (0 - бесплатно)</strong></label>
        <input type="number" name="price" class="form-control" placeholder="Введите цену..." value="{{isset($price)?$price:'0'}}">
    </div>

    <div class="form-group">
        <label><strong>Длительность в минутах: (0 - не показывать)</strong></label>
        <input type="number" name="length" class="form-control" placeholder="Введите длительность..." value="{{isset($length)?$length:'0'}}">
    </div>

    <div class="form-group">
        <label><strong>Время начала события:</strong></label>
        <input onchange="$('#no_time_check').prop('checked',false );" type="text" name="start" id="datatimepicker" class="form-control" placeholder="Выберите дату начала..."  value="{{isset($start)?$start:''}}">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="no_time_check" name="no_time" {{(isset($start) && $start==null)?'checked':''}}>
        <label class="form-check-label">Не показывать время начала</label>
    </div>

    <div class="form-group">
        <label><strong>Адресс: (украинский)</strong></label>
        <input type="text" name="addr" class="form-control" placeholder="Введите адресс..." value="{{isset($addr)?$addr:''}}">
    </div>

    <div class="form-group">
        <label><strong>Адресс: (английский)</strong></label>
        <input type="text" name="addr_eng" class="form-control" placeholder="Введите адресс..." value="{{isset($addr_eng)?$addr_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Изображения:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="event"></div>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (украинский)</strong></label>
        <textarea name="text" id="summernote">{{isset($text)?$text:''}}</textarea>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (английский)</strong></label>
        <textarea name="text_eng" id="summernote_eng">{{isset($text_eng)?$text_eng:''}}</textarea>
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