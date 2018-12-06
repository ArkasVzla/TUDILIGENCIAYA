<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$pais = $_POST['pais'];
$servicio = $_POST['servicio'];
$archivo = $_FILES['archivo'];

if ($nombre=='' || $apellido =='' || $cedula=='' || $telefono =='' || $correo =='' || $pais =='' || $servicio || $archivo =='' ){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("archivosformulario/class.phpmailer.php");
    
    $mail = new PHPMailer();

    $mail->From     = $correo;
    $mail->FromName = $nombre; 
    $mail->AddAddress("jdavidr155@gmail.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $nombre \n<br />".    
    "Apellido: $apellido \n<br />".    
    "Cedula: $cedula \n<br />".
    "Telefono: $telefono \n<br />".
    "Correo: $correo \n<br />".
    "Pais: $pais \n<br />".
    "Servicio: $servicio \n<br />";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    
    
    

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "jdavidr155@gmail.com";  // Correo Electrónico
    $mail->Password = "Cnx4qsirrA30*"; // Contraseña
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>