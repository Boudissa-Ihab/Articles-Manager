$(document).ready(function($) {
    // Upload btn on change call function
    $(".upload-logo").change(function() {
      var filename = readURL(this);
      $(this).parent().children('span').html(filename);
    });

    // Read File and return value
    function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (
            ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "webp" || ext == "bmp")) {
            var path = $(input).val();
            var filename = path.replace(/^.*\\/, "");
            return "Fichier téléchargé : "+filename;
        } else {
            $(input).val("");
            return "Seules les images sont autorisées";
        }
    }
    // Upload btn end
  });
