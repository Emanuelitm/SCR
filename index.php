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
        <form action="save_solicitud.php" method="POST">
            <p>
                <label>Nombre de solicitante:</label>
                <input type="text" name="nombre" id="nombre">
            </p>
            <p>
                <label>Area:</label>
                <select name="area" id="area">
                    <option selected="selected">Embarques</option>
                    <option>Import/Export</option>
                    <option>Compras</option>
                    <option>Otro (Especifique en comentario)</option>
                </select>

                <label>Rampa:</label>
                <select name="rampa" id="rampa">
                    <option selected="selected">1</option>
                    <option>2</option>
                </select>
            </p>

            <p>
                <!--Esta etiqueta solo es para darle espacio a la hora-->
            </p>

            </p>
            <p>
                <label>Del dia y hora:</label>
                <input id="del" type="datetime-local" name="fechahoradel" step="1" min="2019-01-01T00:00" max="2022-12-31T12:00" value="2019-01-01T12:00">

                <p>
                    <label>Hasta el dia y hora:</label>
                    <input id="hasta" type="datetime-local" name="fechahorahasta" step="1" min="2019-01-01T00:00" max="2022-12-31T12:00" value="2019-01-01T12:00">
                </p>

                <p class="block">
                    <label>Comentarios:</label>
                    <textarea id="comentarios" name="comentarios" rows="3"></textarea>
                </p>
                <p class="block">
                    <button type="submit" name="save_solicitud">
                        Solicitar
                    </button>
                </p>
        </form>
    </div>


    <?php include('includes/footer.php'); ?>