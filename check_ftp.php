<?php
// Configuración
$archivo_a_buscar = 'notificacion.txt'; // El archivo que quieres detectar

if (file_exists($archivo_a_buscar)) {
    echo json_encode(["existe" => true, "mensaje" => "¡ATENCIÓN: Tienes una tarea pendiente!"]);
} else {
    echo json_encode(["existe" => false]);
}
?>