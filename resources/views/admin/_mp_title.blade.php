<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>

    <div class="form-group">
        <label><strong>Верхняя надпись: (украинский)</strong></label>
        <input type="text" name="label0" class="form-control" placeholder="Введите текст..." value="{{isset($label0)?$label0:''}}">
    </div>

    <div class="form-group">
        <label><strong>Верхняя надпись: (английский)</strong></label>
        <input type="text" name="label0_eng" class="form-control" placeholder="Введите текст..." value="{{isset($label0_eng)?$label0_eng:''}}">
    </div>


    <div class="form-group">
        <label><strong>Центральная надпись: (украинский)</strong></label>
        <input type="text" name="label1" class="form-control" placeholder="Введите текст..." value="{{isset($label1)?$label1:''}}">
    </div>

    <div class="form-group">
        <label><strong>Центральная надпись: (английский)</strong></label>
        <input type="text" name="label1_eng" class="form-control" placeholder="Введите текст..." value="{{isset($label1_eng)?$label1_eng:''}}">
    </div>


    <div class="form-group">
        <label><strong>Нижняя надпись: (украинский)</strong></label>
        <input type="text" name="label2" class="form-control" placeholder="Введите текст..." value="{{isset($label2)?$label2:''}}">
    </div>

    <div class="form-group">
        <label><strong>Нижняя надпись: (английский)</strong></label>
        <input type="text" name="label2_eng" class="form-control" placeholder="Введите текст..." value="{{isset($label2_eng)?$label2_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (украинский)</strong></label>
        <textarea class="form-control" name="text">{{isset($text)?$text:''}}</textarea>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (английский)</strong></label>
        <textarea class="form-control" name="text_eng">{{isset($text_eng)?$text_eng:''}}</textarea>
    </div>

    <div class="form-group">
        <label><strong>Изображение:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="main_title" data-tag="{{$tag}}"></div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_show" {{isset($is_show)&&!$is_show?'':'checked'}}>
        <label class="form-check-label">Показывать</label>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>