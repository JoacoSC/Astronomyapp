

<?php include 'header.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        require('register_action.php');
    }
?>

    <div style="color: rgba(0, 0, 0, 0.7);background: url(&quot;assets/img/space/mainBackground.jpg&quot;) top / cover no-repeat;">
        <div style="background: rgba(0,0,0,0.4);">
            <div class="text" style="margin-bottom: 0px;padding: 0px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;padding-top: 20px;">
                <h2 style="text-align: center;font-size: 25px;color: rgb(255,255,255);">Registro profesores</h2>
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

                            <form method="POST" action="register_action.php" style="font-size: 13px;">
                            
                            <input class="form-control" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']?>" name="nombre" type="text" style="height: 25px;margin-top: 20px;margin-bottom: 10px;" placeholder="Nombre">
                            <input class="form-control" value="<?php if(isset($_POST['apellidoPat'])) echo $_POST['apellidoPat']?>" name="apellidoPat" type="text" style="height: 25px;margin-top: 10px;margin-bottom: 10px;" placeholder="Apellido paterno">                            
                            <input class="form-control" value="<?php if(isset($_POST['apellidoMat'])) echo $_POST['apellidoMat']?>" name="apellidoMat" type="text" style="height: 25px;margin-bottom: 10px;" placeholder="Apellido materno">                        
                            <input class="form-control" value="<?php if(isset($_POST['rut'])) echo $_POST['rut']?>" required name="rut" maxlength="10" type="text" id="rut" required oninput="checkRut(this)" style="height: 25px;margin-bottom: 10px;" placeholder="Rut">
                            <input class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" required name="email" type="email" style="height: 25px;margin-bottom: 10px;" placeholder="Email*">
                            <!-- <input class="form-control" name="contraseña" type="password" style="height: 25px;margin-bottom: 10px;" placeholder="Contraseña"> -->
                            
                            <div class="form-group d-flex align-items-center" style="max-width: 60%;margin-bottom: 10px;">
                                <input class="form-control" type="text" style="height: 25px;width: 70px;" placeholder="+569" disabled="">
                                <input class="form-control" value="<?php if(isset($_POST['telefono'])) echo $_POST['telefono']?>" name="telefono" maxlength="8" type="text" style="/*min-width: 15%;*/max-width: 100%;height: 25px;margin-left: 5px;/*width: 56px;*/" placeholder="99999999">
                            </div>

                            <p style="color: rgb(255,255,255);padding-top: 5px;">Fecha de Nacimiento</p>
                            <input class="form-control" value="<?php if(isset($_POST['fecha_nac'])) echo $_POST['fecha_nac']?>" name="fecha_nac" type="date" style="margin-bottom: 10px;">

                            <p style="color: rgb(255,255,255);padding-top: 5px;">Región</p>
                            <select class="form-control" value="<?php if(isset($_POST['region'])) echo $_POST['region']?>" id="regiones" name="region" style="margin-bottom: 10px;"></select>

                            <p style="color: rgb(255,255,255);padding-top: 5px;">Comuna</p>
                            <select class="form-control" value="<?php if(isset($_POST['comuna'])) echo $_POST['comuna']?>" id="comunas" name="comuna" style="margin-bottom: 10px;"></select>

                            <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>

    