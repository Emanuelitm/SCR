<?php

include('db.php');

if (isset($_POST['save_solicitud'])) {

  //$sql = "SELECT id, fechahoradel, fechahorahasta FROM solicitud";
  //$resultado = mysqli_query($conn, $sql);

  //$comp = mysqli_fetch_array($resultado);

  //$del = new datetime ($fechahoradel);
  //$hasta = new datetime ($fechahorahasta);
  //$dbdel = new datetime ($row['fechahoradel']);
  //$dbhasta = new datetime ($row['fechahorahasta']);


  //if (($del >= $dbdel && $hasta <= $dbhasta) || ($del <= $dbdel && $hasta >= $dbhasta) || ($del <= $dbdel && $hasta <= $dbhasta) || ($del >= $dbdel && $hasta >= $dbhasta)) { 
   // $_SESSION['message'] = 'No se puede reservar esta fecha.';
   // $_SESSION['message_type'] = 'success';
  //}

 // else {
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
    //}
    $_SESSION['message'] = 'FECHA Y HORA RECERVADA CORRECTAMENTE';
    $_SESSION['message_type'] = 'success';
  }


  header('Location: index.php');
}
?>