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
    <section class="clean-block clean-hero" id="section-background">
        <div class="text" style="margin-bottom: 25px;">
            <h2 style="text-align: center;">Estudiantes</h2>
            <div class="container">
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-12 offset-lg-0">

                        <!-- PRIMER CARD -->

                        <div class="card" id="card-1">
                            <div class="card-body" id="card-1-body">
                                <img src="assets/img/student.png" id="img-card">
                                <h4 class="card-title" id="card-title">
                                    Mostrar estudiantes aquí (Registrar estudiantes)
                                </h4>
                                <a href="registroEstudiantes.php" class="stretched-link"></a>
                            </div>
                        </div>
                        
                        <!-- FIN PRIMER CARD -->

                        <!-- SEGUNDO CARD -->
                        <div class="card" id="card-2">
                            <div class="card-body" id="card-2-body" >
                                <img src="assets/img/blackboard.png" id="img-card">
                                <h4 class="card-title" style="margin-top: 10px;">
                                    Poner boton registrar estudiantes arriba
                                </h4>
                            </div>
                        </div>

                        <!-- FIN SEGUNDO CARD -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>