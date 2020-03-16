$(document).ready(function() {
  $("#guardarUsuario").on("click", function() {
    var miForm = document.getElementById("formUsuario");
    var formData = new FormData(miForm);
    var files = $("#foto")[0].files[0];
    formData.append("file", files);
    $.ajax({
      url: "subir.php",
      type: "post",
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        if (response != 0) {
          Swal.fire({
            position: "top-end",
            type: "success",
            title: "Se guardo correctamente",
            showConfirmButton: false,
            timer: 1500
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error...",
            text: "Error al guardar!",
            confirmButtonText: "Aceptar!"
          });
        }
      }
    });
    $("#formUsuario").trigger("reset");
    return false;
  });
});
