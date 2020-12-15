$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

let summernote_param={
  placeholder: 'Введите текст...',
  toolbar: [
  ['clear',['clear']],
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline','fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview']],
    ['ex', ['link','picture','video']],
    ['control',['undo','redo']]
  ],
  callbacks: {
    onImageUpload: function(image) {
        uploadImage(image[0]);
    },

    onMediaDelete : function(target) {
      deleteFile(target[0].src);
  }
}
};

$('#summernote').summernote(summernote_param);
$('#summernote_eng').summernote(summernote_param);

function uploadImage(image) {
    var data = new FormData();
    data.append("type","etc");
    data.append("image[0]", image);
    $.ajax({
        url: '/admin/loadimage',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        mimeType:'multipart/form-data',
        type: "post",
        success: function(url) {
            let res = JSON.parse(url)

            var image = $('<img>').attr('src', '/upload/images/' + res.image[0]);
            $('#summernote').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteFile(src) {
  let filename = src.split('/').pop();

  $.ajax({
      data: {'filename':filename},
      type: "POST",
      url: '/admin/deleteimage',
      cache: false,
      error: function(resp) {
          console.log(resp);
      }
  });
}

flatpickr("#datatimepicker", {
  enableTime: true,
  dateFormat: "Y-m-d H:i",
});