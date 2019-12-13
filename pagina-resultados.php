<?php include('db.php'); ?>

<tbody>
<?php
if (isset($_POST['buscar'])) {

    $query = "SELECT * FROM solicitud WHERE nombre LIKE  '%$busqueda%' OR area LIKE  '%$busqueda%' 
    OR rampa LIKE  '%$busqueda%' OR fechahoradel LIKE  '%$busqueda%' OR fechahorahasta LIKE  '%$busqueda%' 
    OR comentarios LIKE  '%$busqueda%' ";
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
</tbody>
    <?php } ?>