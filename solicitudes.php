<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>


<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h2 text-color="red">DISPONIBILIDAD</h2>
        <table class="" border="5" bordercolor="white" cellspacing="0">
            <thead>
                <tr>
                    <th>No. DE SOLICITUD</th>
                    <th>NOMBRE DE SOLICITANTE</th>
                    <th>AREA</th>
                    <th>DESDE</th>
                    <th>HASTA</th>
                    <th>COMENTARIOS</th>
                    <th>FECHA DE SOLICITUD</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $query = "SELECT * FROM solicitud WHERE fechahoradel BETWEEN NOW() AND NOW() + INTERVAL 7 DAY";
                $result_solicitud = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_solicitud)) { ?>
                    <tr>
                        <td><?php echo $row['id_solicitud']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['area']; ?></td>
                        <td><?php echo $row['fechahoradel']; ?></td>
                        <td><?php echo $row['fechahorahasta']; ?></td>
                        <td><?php echo $row['comentarios']; ?></td>
                        <td><?php echo $row['data_created']; ?></td>
                        <!-----------BOTONES PARA EDITAR Y ELIMINAR (SOLO PARA ADMIN.)----------
            <td>
            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                <i class="fas fa-edit"></i>
            </a>
            <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
            </a>
            </td>
            ---------BOTONES PARA EDITAR Y ELIMINAR (SOLO PARA ADMIN.)---------->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<?php include('includes/footer.php'); ?>