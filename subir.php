<?php
require_once 'config/conexion.php';

if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/gif")
    ) {
        $carpeta_destino = "images/";
        $nombre_archivo =
            "imagen_" .
            date("dHis") .
            "." .
            pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $archivo_subido = $carpeta_destino . $nombre_archivo;
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo_subido)) {
            //more code here...
            echo "$carpeta_destino . $nombre_archivo";

            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $foto = $nombre_archivo;

            $sql = "INSERT INTO usuario(nombre, apellidos, foto) VALUES('$nombre', '$apellidos ', '$foto')";

            echo $result = mysqli_query($conexion, $sql);
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}
