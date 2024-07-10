<?php
include("db_contacto.php");

if(isset($_POST['register'])){
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(strlen($name) >= 1 && strlen($phone) >= 1 && strlen($email) >= 1 && strlen($message) >= 1){
        $fecha = date("Y-m-d");
        $consulta = "INSERT INTO formulario (NOMBRE, TELÉFONO, EMAIL, MENSAJE, FECHA) VALUES ('$name','$phone','$email','$message','$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            $mensaje = "¡Formulario enviado exitosamente!";
        } else {
            $mensaje = "Error al enviar el formulario. Por favor, inténtalo de nuevo.";
        }
    } else {
        $mensaje = "Por favor, completa todos los campos antes de enviar.";
    }
}
?>
