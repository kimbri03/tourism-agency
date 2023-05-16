<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="datos";
    //funcion para conectar la base de datos
    $con=mysqli_connect($host, $user, $pass, $db )or die("problemas al conectar");
    mysqli_select_db($con, $db) or die ("problemas al conectar la base de datos");
    //usando las variables
    $usuario=$_POST["usuario"];
    $email=$_POST["email"];
    $mensaje=$_POST["mensaje"];
    //sentencias sql
    $sql="INSERT INTO data VALUES ('$usuario', '$email', '$mensaje')";
    //ejecutamos la sentencia sql
    $ejecutar=mysqli_query($con,$sql);
    //verificando el envio
    if(!$ejecutar){
        echo("hubo un error");
    }
    else{
        echo("<script>alert('Gracias por tu mensaje');
        window.location.href=('index.html')</script>");
    }
?>


