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
    <section class="clean-block clean-hero" style="color: rgba(0, 0, 0, 0.7);background: url(&quot;assets/img/space/mainBackground.jpg&quot;), #444444;border-color: rgb(255,255,255);">
        <div class="text" style="margin-bottom: 25px;">
            <h2 style="text-align: center;">Cursos</h2>
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-12 offset-lg-0">
                        <div class="card" style="background: url(&quot;assets/img/jupiter.jpg&quot;) center / cover no-repeat, rgba(255,255,255,0);border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);margin-bottom: 15px;margin-top: 0px;box-shadow: 1px 1px 5px rgb(74,74,74);">
                            <div class="card-body" style="background: rgba(0,0,0,0.8);padding: 20px;margin: 0px;border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);box-shadow: 0px 0px;"><img src="assets/img/student.png" width="135px" style="height: 150px;">
                                <h4 class="card-title" style="margin-top: 10px;">Mostrar cursos</h4>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>