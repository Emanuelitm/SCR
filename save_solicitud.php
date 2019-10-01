<?php

include('db.php');

if (isset($_POST['save_solicitud'])) {

  $sql = "SELECT fechahoradel, fechahorahasta FROM solicitud";
  $resultado = mysqli_query($con, $sql);
  $del = $fechahoradel;
  $hasta = $fechahorahasta;
  $dbdel = $row['fechahoradel'];
  $dbhasta = $row['fechahorahasta'];

  if (($del >= $dbdel && $hasta <= $dbhasta) || ($del <= $dbdel && $hasta >= $dbhasta) || ()) { 


    
  } else {
    $nombre = $_POST['nombre'];
    $area = $_POST['area'];
    $rampa = $_POST['rampa'];
    $fechahoradel = $_POST['fechahoradel'];
    $fechahorahasta = $_POST['fechahorahasta'];
    $comentarios = $_POST['comentarios'];
    $query = "INSERT INTO solicitud (nombre, area, rampa, fechahoradel, fechahorahasta, comentarios) VALUES ('$nombre', '$area', '$rampa', '$fechahoradel', '$fechahorahasta', '$comentarios')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'FECHA Y HORA RECERVADA CORRECTAMENTE';
    $_SESSION['message_type'] = 'success';
  }


  header('Location: index.php');
}
?>