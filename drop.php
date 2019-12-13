<?php

include('db.php');


if (isset($_POST['borrador'])) {
    $id = $_GET['id'];
    $borrar = "DELETE FROM solicitud WHERE id_solicitud='".$id."'";
    if (mysqli_query($conn, $borrar)) {
        echo "Hecho";
    } else {
        die("No se pudo borrar");
    }

  header('Location: index.php');
}
?>