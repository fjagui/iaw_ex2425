<?php

function login($usuario, $password):bool {
    $autenticado = false;
    $file = fopen("config/usuarios.txt","r");
    while (!feof($file)) {
        $aUsuarios[] = explode(',',fgets($file));
    }

    foreach ($aUsuarios as $credenciales) {
       if (trim($credenciales[0])==$usuario and trim($credenciales[1])==$password) {
           $autenticado = true;
       }
    }
    fclose($file);
   
    return $autenticado;

}


function clear_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$tituloTest = function($numeroTest) {
    $salida = $numeroTest+1;
return "Resultado Test: ". $salida;
};