    if ($e_origen_http == 'http://localhost/')) {
<?php
   // Si la petición es vía AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'], $_SERVER['HTTP_REFERER']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $a_componentes_url = parse_url($_SERVER['HTTP_REFERER']);
    $e_origen_http = $a_componentes_url['scheme'] . '://' . $a_componentes_url['host'];
    // Si la petición es de la misma URL del servidor
    if ($e_origen_http == 'http://localhost') {
        $resultado = f_validarpalindromo($_REQUEST['frase']);
        header('Content-Type: application/json');
        echo json_encode($resultado);
    }
}
function f_validarpalindromo($palabra){
    $palabra=str_replace(" ", "", $palabra);
}
    return (strrev($palabra) == $palabra) ? true:false;
?>