<?php 
    session_start();

    include 'header.php';
    include 'helper.php';

    $user = array();

    require ('connection.php');

    if(isset($_SESSION['id'])){
        $user = get_user_info($con, $_SESSION['id']);
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        require ('login_action.php');
    }

    
?>

    <div style="background: url(&quot;assets/img/space/mainBackground.jpg&quot;) top / cover no-repeat;">
        <div style="background: rgba(0,0,0,0.4); min-height: 700px;">
            <div class="text" style="margin-bottom: 0px;padding: 0px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;padding-top: 20px;">
                <h2 style="text-align: center;font-size: 25px;color: rgb(255,255,255);">Iniciar sesión</h2>
                <div class="container" style="max-width: 40%;">
                    <div class="row" style="padding-top: 50px;border-radius: 20px;background: rgba(0,163,255,0.18);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);border: 1px solid #5c5c5c;padding-bottom: 20px;">
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
                            <?php echo isset($user['nombre']);?>

                            <form method="POST" action="login.php" style="font-size: 13px;">
                            
                            <input class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" required name="email" type="email" style="height: 25px;margin-bottom: 20px;" placeholder="Email">
                            <input class="form-control" value="<?php if(isset($_POST['contraseña'])) echo $_POST['contraseña']?>" required name="contraseña" type="password" style="height: 25px;margin-bottom: 20px;" placeholder="Contraseña">
                            
                            <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Iniciar sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>

    