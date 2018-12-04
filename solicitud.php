<?php

$enviado = '';
$errores = '';

if isset($_POST(['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $servicio = $_POST['servicio'];
    $archivo = $_POST['archivo'];

    if (!empty($nombre)) {
        $nombre = trim(nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un nombre';
    }

    if (!empty($apellido)) {
        $apellido = trim($apellido);
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un apellido';
    }

    if (!empty($cedula)) {
        $cedula = trim($cedula);
        $cedula = filter_var($cedula, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar la cedula';
    }

    if (!empty($telefono)) {
        $telefono = trim($telefono);
        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un telefono';
    }

    if (!empty($correo)) {
        $correo = trim($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Por favor ingresar un correo';
    }

    if (!empty($pais)) {
        $pais = trim($pais);
        $pais = filter_var($pais, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar el pais';
    }

    if (!empty($servicio)) {
        $servicio = trim($servicio);
        $servicio = filter_var($servicio, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor seleccionar el servicio';
    }
    
    if (!empty($archivo)) {
        $archivo = trim($archivo);
        $archivo = filter_var($archivo, FILTER_SANITIZE_STRING);
    }

    if (!$errores) {
        $enviar_a 'jdavidr155@gmail.com';
        $asunto = 'Correo enviando desde www.tudiligenciaya.com.ve';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Apellido: $apellido \n";
        $mensaje_preparado .= "Cedula: $cedula \n";
        $mensaje_preparado .= "Telefono: $telefono \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Pais: $pais \n";
        $mensaje_preparado .= "Servicio: $servicio \n";
        $mensaje_preparado .= "Documento: $archivo \n";
        mail($enviar_a, $asunto, $mensaje_preparado);
    }
}

include 'index.php';
include 'la_empresa.php';
include 'servicios.php';
include 'contacto.php';
?>