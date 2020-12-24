<label><strong>Фильтр:</strong></label>
<select class="form-control" name="filter">
    <option value="">Не выбрано</option>

    @foreach ($filters as $c)
        <option value="{{$c->value}}" {{isset($filter)&&$filter==$c->value?'selected':''}}>{{$c->name}}</option>
    @endforeach
</select>