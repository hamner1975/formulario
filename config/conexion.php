<?php
require_once "global.php";
$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($conexion, 'SET NAMES "' . DB_ENCODE . '"');
//si tenemos un posible error en la conexion lo mostramos
if (mysqli_connect_errno()) {
  printf("Fallo la conexion a la base de datos: %s\n", mysqli_connect_error());
  exit();
}
if (!function_exists('ejecutaConsulta')) {
  function ejecutaConsulta($sql)
  {
    global $conexion;
    $query = $conexion->query($sql);
    return $query;
  }
  function ejecutaConsultaSimpleFila($sql)
  {
    global $conexion;
    $query = $conexion->query($sql);
    $row = $query->fetch_assoc();
    return $row;
  }
  function ejecutaConsulta_retornarID($sql)
  {
    global $conexion;
    $query = $conexion->query($sql);
    return $conexion->insert_id;
  }
  function limpiaCadena($str)
  {
    global $conexion;
    $str = mysqli_real_escape_string($conexion, trim($str));
    return htmlspecialchars(str);
  }
}
?>
