<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>
     
    <div class="form-group">
        <label><strong>Категория:</strong></label>
        <select class="form-control" name="type">
            <option value="">Не выбрано</option>

            @foreach ($categorys as $c)
                <option value="{{$c->link}}" {{isset($type)&&$type==$c->link?'selected':''}}>{{$c->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label><strong>Фильтр:</strong></label>
        <select class="form-control" name="filter">
            <option value="">Не выбрано</option>

            @foreach ($filters as $c)
                <option value="{{$c->value}}" {{isset($filter)&&$filter==$c->value?'selected':''}}>{{$c->name}}</option>
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
        <label><strong>Изображения:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="hotel"></div>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (украинский)</strong></label>
        <textarea name="text" id="summernote">{{isset($text)?$text:''}}</textarea>
    </div>

    <div class="form-group">
        <label><strong>Полное описание: (английский)</strong></label>
        <textarea name="text_eng" id="summernote_eng">{{isset($text_eng)?$text_eng:''}}</textarea>
    </div>

    <label class="mt-5"><strong>Дополнительные параметры:</strong></label>

    <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" value="1" name="is_show_ex_param" {{isset($is_show_ex_param)&&!$is_show_ex_param?'':'checked'}}>
        <label class="form-check-label">Показывать дополнительные параметры</label>
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
        <label><strong>Номера телефонов:</strong> (можно ввести несколько через знак ;)</label>
        <input type="text" name="phones" class="form-control" placeholder="Введите номер..." value="{{isset($phones)?$phones:''}}">
    </div>

    <div class="form-group">
        <label><strong>Email администратора:</strong></label>
        <input type="email" name="admin_email" class="form-control" placeholder="Введите номер..." value="{{isset($admin_email)?$admin_email:''}}">
    </div>

    <div class="form-group">
        <label><strong>Ссылка на Booking:</strong></label>
        <input type="text" name="blink" class="form-control" placeholder="Вставьте ссылку..." value="{{isset($blink)?$blink:''}}">
    </div>

    <label><strong>Время работы:</strong> (если указано время работы с 0 до 0 то будет написано что выходной)</label>

    @php
    $daylist = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];  
    if (isset($work_times))
    {
        $wt = explode("|",$work_times);

        for ($i=0;$i<count($wt);$i++)
        {
            $wt0 = explode("-",$wt[$i]);

            $from_d[$i] = $wt0[0];
            $to_d[$i] = $wt0[1];
        }
    }
    @endphp

    @for ($i = 0; $i < 7; $i++)
    <div class="form-group">
            <label>{{$daylist[$i]}}:</label>
            <input placeholder="Время работы с..." class="form-control" type="time" name="from_d{{$i}}" value="{{isset($from_d[$i])?$from_d[$i]:''}}">
            <input placeholder="Время работы до..." class="form-control" type="time" name="to_d{{$i}}" value="{{isset($to_d[$i])?$to_d[$i]:''}}">
    </div>
    @endfor

    <button class="btn btn-primary" type="submit">OK</button>
</form>