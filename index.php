<?php
session_start();
if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
}

/** 
 * EJ1. INCLUYE FICHERO DE CONFIGURACIÓN Y FICHERO DE FUNCIONES
 */

if (isset($_POST['enviar'])) {
    $usuario = clear_data(/*EJ1. RECUPERA DATOS DEL FORMULARIO */); 
    $password = clear_data(/*EJ1. RECUPERA DATOS DEL FORMULARIO */);
    $_SESSION['auth'] = /*EJ1. LLAMA A LA FUNCIÓN DE LOGIN */;
}

/** 
 * EJ2. INCLUYE ESTRUCTURA DE CONTROL PARA CARGAR INFORMACIÓN DE CUENTA Y PERFIL
 */
$menu = $menus[$perfil];
$lauth = $_SESSION['auth'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveUp Autoescuela</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>DriveUp Autoescuela</h1>
    <nav>
        <ul> 
            <?php
                /** 
                 * EJ3. MOSTRAR EL MENÚ DE NAVEGACIÓN
                 */
            ?>
        </ul>
    </nav>
    <p><?php echo $infCuenta ?></p>
    <?php
        /**
         * EJ4. MOSTRAR INFORMACIÓN DE CUENTA O FORMULARIO DE ACCESO
         */
    ?>
   
    <h2>Lista de Videos</h2>
    <?php 
        /**
         * EJ5. MUESTRA LA LISTA DE VIDEOS ALMACENADOS EN EL ARRAY DE CONFIGURACIÓN
         */
    ?>
</body>
</html>