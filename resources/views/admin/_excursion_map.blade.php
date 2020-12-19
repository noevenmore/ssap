<form action="{{$link}}" method="POST">
    @csrf

    <input type="text" name="id" value="{{isset($id)?$id:0}}" hidden>
     
    <div class="form-group">
        <label><strong>Изображения маршрута:</strong></label>
        <div id="imageloader" data-list="{{isset($images_list)?$images_list:""}}" data-type="excursion" data-tag="map"></div>
    </div>

    <button class="btn btn-primary" type="submit">OK</button>
</form>