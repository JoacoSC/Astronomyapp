<?php

//abrir la sesion
/* session_start(); */

$error = array();

$email = validar_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Olvidaste ingresar tu email";
}

$contraseña = validar_input_text($_POST['contraseña']);
if (empty($contraseña)){
    $error[] = "Olvidaste ingresar tu contraseña";
}

if (empty($error)){
    // sql query
    $query = "SELECT id, nombre, apellido_pat, apellido_mat, rut, email, contraseña, telefono, fecha_nac, region, comuna FROM profesor WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        // verify password
        if(password_verify($contraseña, $row['contraseña'])){
            
            // create session variable
            /* $_SESSION['id'] = mysqli_insert_id($con); */
            $_SESSION['id'] = $row['id'];
            print "Ingresaste correctamente";
            header("location: homeProfesor.php");
            exit();
        }else{
            header("location: login.php?fallo=true");
        }
    }else{
        print "No estás registrado!";
    }

}else{
    echo "Please Fill out email and password to login!";
}

?>