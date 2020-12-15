@isset($data)
<div id="pagination" class="container">
    <div class="row">
        <div class="col-lg-3 col-12"></div>
        <div class="col-lg-9 col-md-12">
            {{$data->links('_pagination')}}
        </div>
    </div>
</div>
@endisset