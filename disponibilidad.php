<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>


<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">


    <?php

 $id = $_GET['id'];
        $query = "SELECT * FROM solicitud";
        

        $result_solicitud = mysqli_query($conn, $query);
        $row = mysqli_fetch_object($result_solicitud);
/* Función */
function check_in_range($fecha_inicio, $fecha_fin, $fecha){

     $fecha_inicio = strtotime($fecha_inicio);
     $fecha_fin = strtotime($fecha_fin);
     $fecha = strtotime($fecha);

     if(($fecha >= $fecha_inicio) && ($fecha <= $fecha_fin))
         return true;
     else
         return false;
 }


/*Código de prueba*/

$fecha_inicio = $_GET['fechahoradel']; 
$fecha_fin = $_GET['fechahorahasta'];
$fecha = '2017-08-22';

if (check_in_range($fecha_inicio, $fecha_fin, $fecha))
{
    echo "$fecha está en el rango\n";
}else{
    echo "$fecha NO está en el rango\n";

}


$fecha_inicio = '2017-08-15'; 
$fecha_fin = '2017-08-31';
$fecha = '2018-08-22';

if (check_in_range($fecha_inicio, $fecha_fin, $fecha))
{
    echo "$fecha está en el rango\n";
}else{
    echo "$fecha NO está en el rango\n";

}

?>







    </div>


<?php include('includes/footer.php'); ?>