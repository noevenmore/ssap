<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>

    <div class="form-group">
        <label><strong>Надпись в строке браузера: (английский, без пробелов и спецзнаков)</strong></label>
        <input type="text" name="link" maxlength="32" class="form-control" placeholder="Введите текст..." value="{{isset($llink)?$llink:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (украинский)</strong></label>
        <input type="text" name="name" maxlength="64" class="form-control" placeholder="Введите название..." value="{{isset($name)?$name:''}}">
    </div>

    <div class="form-group">
        <label><strong>Название: (английский)</strong></label>
        <input type="text" name="name_eng" maxlength="64" class="form-control" placeholder="Введите название..." value="{{isset($name_eng)?$name_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Изображение:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="category"></div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_main" {{isset($is_main)&&!$is_main?'':'checked'}}>
        <label class="form-check-label">Показывать на главной</label>
    </div>


    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>