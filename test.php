<?php
/**
 * EJ6. Incluye lo necesario para que este script solo
 * se pueda ejecutar si estas autenticado en el sistema y redirija a index.php cuando
 * no se cumpla esta condición.
 */

/** 
 * EJ1. INCLUYE FICHERO DE CONFIGURACIÓN Y FICHERO DE FUNCIONES
 */

$lprocesaTest=false;
$lprocesaPreguntas=false;

$cantidadTest=count($aTests);
$testsDisponibles = array_map(function($v){return 'Test: '. $v['idTest'].', '.$v['Permiso'].', '.$v['Categoria'];},$aTests);
$tituloTest = function($numeroTest) {
                      $salida = $numeroTest+1;
                      return "Resultado Test: ". $salida;};

/** 
 * EJ7 RECUPERA TEST ALMACENADO EN LA COOKIE.
 */    

if (isset($_POST['submitTest'])) {
    $numeroTest = $_POST['numero_test'];
    $testActual = $aTests[$numeroTest]['Preguntas'];
    $directorioImagenes = 'dir_img_test'.$aTests[$numeroTest]['idTest'];
    $lprocesaTest=true;
}

if (isset($_POST['submitRespuestas'])) {
    $numeroTest = $_POST['numero_test']; 
    $testActual = $aTests[$numeroTest]['Preguntas'];
    $lprocesaPreguntas=true;
    /** 
     * EJ7 ALMACENA EN LA COOKIE EL SIGUIENTE NÚMERO DE TEST. 1 AL FINAL DEL NÚMEROS DE TEST
     */ 
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
    <link rel="stylesheet" href="css/test.css">
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
    <p><?php echo $infCuenta ?>
    <?php
         /**
         * EJ4. MOSTRAR INFORMACIÓN DE CUENTA O FORMULARIO DE ACCESO
         */
    ?>
   
  <h2>Tests</h2>
	<p>Seleccione test</p>
    <form action="" method="post">
      <select name="numero_test">
    	<?php
          /**
           * EJ8. MOSTRAR LOS TEST DISPONIBLES
           */
	    ?>
	  </select>
	  <input value = "Enviar" type="submit" name="submitTest">
	</form>
  <br/>
  
  <?php
    
      if ($lprocesaTest) {
        echo "<h3>Responda Test: ".($numeroTest+1)."</h3>";
        echo "<form method=\"POST\" action=\"\">";
        /**
         * EJ9 GENERAR DINÁMICAMENTE EL FORMULARIO DESDE EL FICHERO DE CONFIGURACIÓN
         */
        echo "<input type=\"hidden\" name=\"numero_test\" value=\"".$numeroTest."\">";
        echo "<input type=\"submit\" name=\"submitRespuestas\">";
        echo "</form>";
      }

      if ($lprocesaPreguntas) {
        echo '<h3>'. $tituloTest($numeroTest).'</h3>';
        $aciertos = 0;
        /**
         * EJ10. PROCESAR FORMULARIO PARA MOSTRAR EL RESULTADO DEL TEST
         */
        
        if ($aciertos<8) {
            $mensaje = "Test NO superado";
            $sello = 'img/error.png';
            $clase = 'falla';
        }
        else {
            $mensaje = "Test superado";
            $sello = 'img/ok.png';
            $clase = 'acierta';
        }
        echo '<div class="resultado">';
        echo '<h2>Número de aciertos: '. $aciertos.'</h2>';
        echo '<h3 class= "'.$clase.'">'.$mensaje.'</h3>';
        echo '<img src="'.$sello.'"/>';
        echo '</div>';
      }
  ?>

</body>
</html>


</body>
</html>