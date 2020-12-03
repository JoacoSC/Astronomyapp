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
            <h2 style="text-align: center;">Bienvenido a Astronomyapp</h2>
        </div>
    </section>


<?php
include 'footer.php';
?>