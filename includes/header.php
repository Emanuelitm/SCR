<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCR</title>
    <link rel="stylesheet" href="main.css">
    <!-- BOOTSTRAP 4 
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">-->
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">
        <nav class="menu">
          <ul>
            <li style="float:left"><img src="images/SCR(2).png"></li>



            <form method="POST" action="pagina-resultados.php"> 
            <input type="text" name="palabra" size="20">
            <input type="submit" value="Buscar" name="buscar"> 
            </form> 


            <li><a href="./disponibilidad.php" class="active">Disponibilidad</a></li>
            <li><a href="./solicitudes.php">Solicitudes</a></li>
            <li><a href="./index.php">Inicio</a></li>
            
          </ul>
        </nav>