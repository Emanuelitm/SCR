<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>


<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">


    <?php

 	// $id = $_GET['id'];
        $query =  "SELECT * FROM solicitud";
        $result_solicitud = mysqli_query($conn, $query);
        // $row = mysqli_fetch_array($result_solicitud);
        // print_r($row);

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

		while ($row = mysqli_fetch_array($result_solicitud)) {

			$fecha_inicio = $row['fechahoradel']; 
			$fecha_fin = $row['fechahorahasta'];
			//Aqui va el valor del selector de fecha 
			$fecha = '2017-08-22';
			//IMPRIMES LO QUE DESEES VER CON EL FORMATO QUE GUSTES
			if (check_in_range($fecha_inicio, $fecha_fin, $fecha))
			{
			    echo "solicitud ".$row['id_solicitud']."fecha está en el rango \r\n";
			}else{
			    echo "solicitud ".$row['id_solicitud']." NO está en el rango \r\n";

			}
		}
		/*Código de prueba*/



		// $fecha_inicio = '2017-08-15'; 
		// $fecha_fin = '2017-08-31';
		// $fecha = '2018-08-22';

		// if (check_in_range($fecha_inicio, $fecha_fin, $fecha))
		// {
		//     echo "$fecha está en el rango\n";
		// }else{
		//     echo "$fecha NO está en el rango\n";

		// }

	?>







    </div>


<?php include('includes/footer.php'); ?>