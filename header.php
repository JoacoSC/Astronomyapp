<?php 
    
    include ('helper.php');

    $user = array();

    
    if(isset($_SESSION['id'])){
        /* print "entré"; */
        require ('connection.php');
        $user = get_user_info($con, $_SESSION['id']);
        /* echo $user[0];
        echo isset($user[0]); */
        /* foreach ($user as $key => $value) {
            echo "Key: $key; Value: $value\n<br>";
        } */
    }else{
        /* print "no entré"; */
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro profesores</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="">Astronomyapp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <?php
                    if ( isset( $_SESSION['id'] ) ) {
                        // Grab user data from the database using the user_id
                        // Let them access the "logged in only" pages
                        ?>
                        
                        <!-- BOTONES PARA USUARIOS LOGEADOS -->

                        <li class="nav-item"><a class="nav-link" href="homeProfesor.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Registrar estudiantes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Crear clase</a></li>

                        <!-- DROPDOWN -->

                        <div class="dropdown">
                        <button class="btn dropdown-toggle btn-primary shadow-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: rgb(0,163,255);border-color: rgb(0,163,255);">
                            <?php
                                echo $user['nombre'];
                            ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                        </div>
                        </div>

                        <!-- FIN DROPDOWN -->

                        <!-- FIN BOTONES PARA USUARIOS LOGEADOS -->

                        <?php
                    } else {
                        // Redirect them to the login page
                        /* header("Location: http://www.yourdomain.com/login.php"); */
                        ?>

                        <!-- BOTONES PARA INVITADOS -->

                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Boton Invitado</a></li>

                        <!-- FIN BOTONES PARA INVITADOS -->

                        <?php
                    }
                    ?>
                    
                    
                </ul>
                <?php
                if ( isset( $_SESSION['id'] ) ) {
                    ?>
                    <!-- BOTON CERRAR SESION -->
                    <!-- <a class="btn btn-primary shadow-sm" href="logout.php" type="button" style="background: rgb(0,163,255);border-color: rgb(0,163,255);">Cerrar Sesión</a> -->
                    <!-- BOTON CERRAR SESION -->
                    <?php
                }else{
                    ?>

                    <!-- BOTONES INICIAR SESION Y REGISTRARSE -->
                    <a class="btn btn-primary shadow-sm" href="login.php" type="button" style="background: rgb(0,163,255);border-color: rgb(0,163,255);">
                    Iniciar Sesión
                    </a>
                    <a class="btn btn-primary shadow-sm" href="registroProfesor.php" type="button" style="background: rgb(0,163,255);border-color: rgb(0,163,255);margin-left:10px;">
                        Registrarse
                    </a>

                    <!-- BOTONES INICIAR SESION Y REGISTRARSE -->

                    <?php

                }
                ?>
            </div>
        </div>
    </nav>