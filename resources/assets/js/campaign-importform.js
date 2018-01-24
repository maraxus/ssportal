$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
    
      $(document).on('submit','#import-form', function (event) {
          //event.preventDefault();
          var formData = new FormData();
            formData.append('file', $('input[type=file]')[0].files[0]);
            formData.append('text', $('input[type=text]')[0].value);

          var url = $(this).attr('action');

          data = formData;

          $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            data: formData,
            processData: false,
            type: 'POST',
            // This will override the content type header, 
            // regardless of whether content is actually sent.
            // Defaults to 'application/x-www-form-urlencoded'
            contentType: 'multipart/form-data', 

            //Before 1.5.1 you had to do this:
            beforeSend: function (x) {
                if (x && x.overrideMimeType) {
                    x.overrideMimeType("multipart/form-data");
                }
            },
            // Now you should be able to do this:
            mimeType: 'multipart/form-data',    //Property added in 1.5.1

            success: function(data){
              $('.form-group').html("<h4 class='success'>Seu arquivo está pronto</h4>");
            }
          });
      });

      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
          log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

          $('#form-group').append("<h4 class='success'>Seu arquivo está pronto</h4>");

          var form = $(this).parents('#import-form').trigger('submit');

      });
  });
  
});