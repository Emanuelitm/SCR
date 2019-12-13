<?php

include('db.php');


if (isset($_POST['Update_solicitud'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $area = $_POST['area'];
    $rampa = $_POST['rampa'];
    $fechahoradel = $_POST['fechahoradel'];
    $fechahorahasta = $_POST['fechahorahasta'];
    $comentarios = $_POST['comentarios'];
    $query = "UPDATE solicitud SET nombre= '".$nombre."', area='".$area."', rampa='".$rampa."', fechahoradel='". $fechahoradel."', fechahorahasta='".$fechahorahasta."', comentarios='".$comentarios."', data_created='".date("Y-m-d H:i:s")."' WHERE id_solicitud='".$id."'";
    //$result = mysqli_query($conn, $query);
    var_dump($query, time());
    if (mysqli_query($conn, $query)) {
        echo "Hecho";
    } else {
      die("Query Failed.");
      $_SESSION['message'] = 'No se puede reservar esta fecha.';
      $_SESSION['message_type'] = 'success';
    //}
    }
    $_SESSION['message'] = 'FECHA Y HORA RECERVADA CORRECTAMENTE';
    $_SESSION['message_type'] = 'success';
  


  header('Location: index.php');
}
?>