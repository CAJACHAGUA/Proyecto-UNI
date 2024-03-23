<?php 
   include $_SERVER['DOCUMENT_ROOT'] . '/app/model/conexion.php';

   $db = new DatabaseConnection();
   $con = $db->connect();
   $usuario = $_POST['usuario'];
   $clave = $_POST['clave'];

   $consulta ="SELECT * FROM acceso where codAcceso='$usuario'and clave='$clave'";
   $resultado = mysqli_query($con,$consulta);

   $rol= "SELECT rol FROM `acceso` WHERE codAcceso = '$usuario'";
   $resul = mysqli_query($con,$rol);

   $fila = mysqli_num_rows($resultado);
   session_start(); 

   if($fila){
    $_SESSION['usuario']=$usuario;
    header("Location:/app/view/home.php");

   }else{
      
      $_SESSION['error_message'] = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
      header("Location:index.php");
   }


?>
