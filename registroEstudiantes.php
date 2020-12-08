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

    <section class="clean-block clean-hero" style="color: rgba(0, 0, 0, 0.7);background: url(&quot;assets/img/space/mainBackground.jpg&quot;), #444444;border-style: none;border-color: rgb(255,255,255);">
        <div class="text" style="margin-bottom: 25px;">
            <h2 style="text-align: center;">Registro de estudiantes</h2>
            <div class="container" style="background: #00a3ff2e;border-radius: 20px;border: 1px solid rgb(92,92,92);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);">
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-12 offset-lg-0" style="padding-right: 0px;padding-left: 0px;">
                        <div class="card" style="background: rgba(0,0,0,0.69);border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);margin-bottom: 15px;margin-top: 0px;box-shadow: 0px 1px 7px rgb(11,11,11);">
                            <div class="card-header" style="border-width: 0px;border-style: solid;">
                                <h4 style="margin-top: 10px;font-size: 20px;">Arrastre su archivo o haga clic<br>en "Seleccionar archivo"</h4>
                            </div>
                            <div class="card-body" style="background: url(&quot;assets/img/upload.png&quot;) top / contain no-repeat, rgba(255,255,255,0.45);padding: 0px;margin: 0px;border-radius: 10px;box-shadow: inset 1px 2px 5px rgb(0,0,0);margin-bottom: 20px;margin-right: 10px;margin-left: 10px;border: 1px solid rgb(113,113,113) ;"><input type="file" style="font-size: 12px;color: #ffffff;padding: 10px;padding-top: 100px;min-width:100%;min-height:100%;"></div>
                            <div class="card-body"><button class="btn btn-primary" type="button" style="background: rgb(0,163,255);border-color: rgb(0,163,255);">Registrar alumnos</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>