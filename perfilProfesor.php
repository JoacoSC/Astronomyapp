
<?php 
    session_start();
    include ('header.php');
    

    $user = array();

    
    if(isset($_SESSION['id'])){
        /* print "entré"; */
        
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
    <div style="background: url(&quot;assets/img/space/mainBackground.jpg&quot;) top / cover no-repeat;">
        <div style="background: rgba(0,0,0,0.4);">
            <div class="text" style="margin-bottom: 0px;padding: 0px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;padding-top: 20px;">
                <h2 style="text-align: center;font-size: 25px;color: rgb(255,255,255);"><?php echo $user['nombre']; ?></h2>
                <div class="container" style="max-width: 40%;">
                    <div class="row" style="padding-top: 20px;border-radius: 20px;background: rgba(0,163,255,0.18);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);border: 1px solid #5c5c5c;padding-bottom: 20px;">
                        <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1 text-left">

                            <!-- <div class="upload-profile-image d-flex justify-content-center pb-5">
                                <div class="text-center" style="max-width: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                                    </div>
                                    <img src="./assets/img/teacher.png" style="max-width: 90%; min-width: 90%;" class="img rounded-circle" alt="profile">
                                    <small class="form-text text-white-50">Seleccionar imagen</small>
                                    <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                                </div>
                            </div> -->

                            
                            <form method="POST" action="perfilProfesor.php">
                            
                            <p class="p-editarPerfil">
                                Nombre:
                            </p>
                            <input class="form-control" id="EditarNombre" type="text" style="height: 25px;margin-bottom:10px;" value="<?php echo $user['nombre']; ?>" disabled="">
                            <button class="btn" type="button" id="BotonEditarNombre" name="botonEditar" onclick="toggle()"></button>
                            
                            <div class="d-lg-flex">
                                <button class="btn" type="button" id="BotonActualizarNombre" type="submit"></button>
                                <button class="btn" type="button" id="BotonCancelarNombre" onclick="cancelarBoton()"></button>
                            </div>
                            
                            </form>


                            <p class="p-editarPerfil">
                                Apellido Paterno:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['apellido_pat']; ?>" disabled="">

                            <p class="p-editarPerfil">
                                Apellido Materno:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['apellido_mat']; ?>" disabled="">

                            <p class="p-editarPerfil">
                                Rut:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['rut']; ?>" disabled="">

                            <p class="p-editarPerfil">
                                Email:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['email']; ?>" disabled="">

                            <p class="p-editarPerfil">
                                Teléfono:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['telefono']; ?>" disabled="">

                            <p class="p-editarPerfil">
                                Fecha de nacimiento:
                            </p>
                            <input class="form-control" value="<?php echo $user['fecha_nac']?>" name="fecha_nac" type="date" style="height: 25px;" disabled="">


                            <p class="p-editarPerfil">
                                Región:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['region']; ?>" disabled="">
                            
                            <p class="p-editarPerfil">
                                Comuna:
                            </p>
                            <input class="form-control" type="text" style="height: 25px;" value="<?php echo $user['comuna']; ?>" disabled="">

                            <!-- <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Registrar</button> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function cancelarBoton() {
        var input = document.getElementById("EditarNombre");
        var editar = document.getElementById("BotonEditarNombre");
        var actualizar = document.getElementById('BotonActualizarNombre');
        var cancelar = document.getElementById('BotonCancelarNombre');

        input.value = "<?php echo $user['nombre']; ?>";
        toggle();

        editar.style.display = "block";
        actualizar.style.display = "none";
        cancelar.style.display = "none";
        
    }
    </script>
    
    <?php include 'footer.php'; ?>

    