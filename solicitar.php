<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $servicio = $_POST['servicio'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un nombre <br />';
    }

    if (!empty($apellido)) {
        $apellido = trim($apellido);
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un apellido <br />';
    }

    if (!empty($cedula)) {
        $cedula = trim($cedula);
        $cedula = filter_var($cedula, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar la cedula <br />';
    }

    if (!empty($telefono)) {
        $telefono = trim($telefono);
        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar un telefono <br />';
    }

    if (!empty($correo)) {
        $correo = trim($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Por favor ingresar un correo <br />';
    }

    if (!empty($pais)) {
        $pais = trim($pais);
        $pais = filter_var($pais, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresar el pais <br />';
    }

    if (!empty($servicio)) {
        $servicio = trim($servicio);
        $servicio = filter_var($servicio, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor seleccionar el servicio <br />';
    }
    
    if (!empty($archivo['name'])) {
        $errores[] .= 'Por favor ingrese un archivo';
    } 

    if (!$errores) {       
        $enviado = 'true';
    }
}
include 'solicitar.view.php';
?>