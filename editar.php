<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<div class="contact-wrapper animated bounceInUp">

    <div class="contact-form">

        <!-- ------------START MESSAGE OF SUCCESFULLY----------- -->
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset();
        } ?>
        <!-- ------------END MESSAGE OF SUCCESFULLY----------- -->
        <h3>Solicitud</h3>
        <form action="update.php" method="POST">
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM solicitud WHERE id_solicitud='$id'";
        

        $result_solicitud = mysqli_query($conn, $query);
        $row = mysqli_fetch_object($result_solicitud);
        
        ?>
        
            <p>
                <label>Nombre de solicitante:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $row->nombre; ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            </p>
            <p>
                <label>Area:</label>
                <select name="area" id="area" value="<?php echo $row->area; ?>">
                    <option >Embarques</option>
                    <option >Import/Export</option>
                    <option >Compras</option>
                    <option >Otro (Especifique en comentario)</option>
                </select>

                <label>Rampa:</label>
                <select name="rampa" id="rampa" value="<?php echo $row->rampa; ?>">
                    <option>1</option>
                    <option>2</option>
                </select>
            </p>

            <p>
                <!--Esta etiqueta solo es para darle espacio a la hora-->
            </p>

            </p>
            <p>
                <label>Del dia y hora:</label>
                <input id="del" type="datetime-local" name="fechahoradel" step="1" min="2019-01-01T00:00" max="2022-12-31T12:00" value="<?php echo $row->fechahoradel; ?>">

                <p>
                    <label>Hasta el dia y hora:</label>
                    <input id="hasta" type="datetime-local" name="fechahorahasta" step="1" min="2019-01-01T00:00" max="2022-12-31T12:00" value="<?php echo date ('Y-m-d', strtotime($row->fechahorahasta)); ?>">
                </p>

                <p class="block">
                    <label>Comentarios:</label>
                    <textarea id="comentarios" name="comentarios" rows="3" value="<?php echo $row->comentarios; ?>"></textarea>
                </p>
                <p class="block">
                    <button type="submit" name="Update_solicitud">
                        Solicitar
                    </button>
                </p>
        </form>
    </div>


    <?php include('includes/footer.php'); ?>

    