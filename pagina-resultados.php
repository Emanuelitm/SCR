 <?php include("db.php"); ?>

    <?php include('includes/header.php'); 
    if (isset($_POST['buscar'])) { ?>
    
    
    <div class="contact-wrapper animated bounceInUp">
        <div class="contact-form">
            <h2 text-color="red">DISPONIBILIDAD</h2>
    
            <table class="" border="5" bordercolor="white" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. DE SOLICITUD</th>
                        <th>NOMBRE DE SOLICITANTE</th>
                        <th>AREA</th>
                        <th>RAMPA</th>
                        <th>DESDE</th>
                        <th>HASTA</th>
                        <th>COMENTARIOS</th>
                        <th>FECHA DE SOLICITUD</th>
                    </tr>
                </thead>
                <tbody>
    
                    <?php
                    
                    //$query = "SELECT * FROM solicitud WHERE fechahoradel BETWEEN NOW() AND NOW() + INTERVAL 7 DAY";
                    $buscar = $_POST["palabra"];
                    $query = "SELECT * FROM solicitud WHERE id_solicitud LIKE  '%$buscar%' or nombre LIKE  '%$buscar%' or area LIKE  '%$buscar%' or rampa LIKE  '%$buscar%' or fechahoradel LIKE  '%$buscar%' or fechahorahasta LIKE  '%$buscar%' or comentarios LIKE  '%$buscar%' ";
                    $result_solicitud = mysqli_query($conn, $query);
    
                    while ($row = mysqli_fetch_array($result_solicitud)) { ?>
                        <tr>
                            <td><?php echo $row['id_solicitud']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['area']; ?></td>
                            <td><?php echo $row['rampa']; ?></td>
                            <td><?php echo $row['fechahoradel']; ?></td>
                            <td><?php echo $row['fechahorahasta']; ?></td>
                            <td><?php echo $row['comentarios']; ?></td>
                            <td><?php echo $row['data_created']; ?></td>
                            <!-----------BOTONES PARA EDITAR Y ELIMINAR (SOLO PARA ADMIN.)---------->
                <td>
                <a href="editar.php?id=<?php echo $row['id_solicitud']; ?>" class="btn btn-secondary">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="drop.php?id=<?php echo $row['id_solicitud'] ?>" class="btn btn-danger" name="borrador">
                    <i class="far fa-trash-alt"></i>    
                </a>
                </td>
                
                        </tr>
                    <?php }
                    } else {
                        die("No esta bien excrito o no hay un registro igual");
                    }?>
                </tbody>
            </table>
        </div>
    
    
    <?php include('includes/footer.php'); ?>