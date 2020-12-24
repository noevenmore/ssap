$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$('#ModalDeleteWindow').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var data_id_hide = button.data('id');
    var data_name_hide = button.data('filename');
    var data_url = button.data('url');
    var data_route = button.data('route');
    var data_static = button.data('static');

    var modal = $(this);
    modal.find('.data-id').text(data_id_hide);
    modal.find('.data-filename').text(data_name_hide);
    modal.find('.data-url').text(data_url);
    modal.find('.data-route').text(data_route);
    modal.find('.data-static').text(data_static);
  });

  window.showModalWindowDelete = function(event)
{
    $('#ModalDeleteWindow').modal('hide');

    var hidden_id = $('#ModalDeleteWindow .data-id').text();
    var hidden_name = $('#ModalDeleteWindow .data-filename').text();
    var url_post = $('#ModalDeleteWindow .data-url').text();
    var url_route = $('#ModalDeleteWindow .data-route').text();
    var is_static = $('#ModalDeleteWindow .data-static').text();

    $('#item_id_'+hidden_id).hide();

    $.ajax({
        url:url_post,
        data:{
            _token: window.token,
            id: hidden_id,
            filename: hidden_name
        },
        method: 'post',
        success: function ()
        {
            if (!is_static)
            {
                if (url_route.length>0)
                {
                    window.location.href = url_route;
                } else
                {
                    window.location.reload(false);
                }
            }
        }
    });
}

window.loadFilters = function()
{
    $('#filters').html(null);

    var value = $('#category').val();

    $.ajax({
        url:"/admin/ex/get-filters",
        data:{
            link: value,
        },
        method: 'get',
        success: function (data)
        {
            $('#filters').html(data);
        }
    });

    
}