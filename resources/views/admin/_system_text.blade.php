<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>

    <div class="form-group">
        <label><strong>Заголовок: (украинский)</strong></label>
        <input type="text" name="caption" class="form-control" placeholder="Введите текст..." value="{{isset($caption)?$caption:''}}">
    </div>

    <div class="form-group">
        <label><strong>Заголовок: (английский)</strong></label>
        <input type="text" name="caption_eng" class="form-control" placeholder="Введите текст..." value="{{isset($caption_eng)?$caption_eng:''}}">
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (украинский)</strong></label>
        <textarea class="form-control" name="text" id="summernote">{{isset($text)?$text:''}}</textarea>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (английский)</strong></label>
        <textarea class="form-control" name="text_eng" id="summernote_eng">{{isset($text_eng)?$text_eng:''}}</textarea>
    </div>

    <button class="btn btn-primary mt-3" type="submit">OK</button>
</form>