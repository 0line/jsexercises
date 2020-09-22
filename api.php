<?php
   // Si la petición es vía AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'], $_SERVER['HTTP_REFERER']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $a_componentes_url = parse_url($_SERVER['HTTP_REFERER']);
    $e_origen_http = $a_componentes_url['scheme'] . '://' . $a_componentes_url['host'];
    // Si la petición es de la misma URL del servidor
    if ($e_origen_http == 'http://localhost/')) {
        if ($_REQUEST['opcion'] == "palindrome") {
            $resultado = f_validarpalindromo($_REQUEST['input_palabra']);
        }
    }
}

function f_validarpalindromo($palabra){
    $palabra=str_replace(" ", "", $palabra);
    return (strrev($palabra) == $palabra) ? true:false;
}
?>