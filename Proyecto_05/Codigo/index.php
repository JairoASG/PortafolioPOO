<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Bitácoras</title>
</head>
<body>

<h2>Registro de Actividades</h2>

<form method="POST">
    <label>Descripción de la actividad:</label><br>
    <input type="text" name="actividad"><br><br>

    <label>Responsable:</label><br>
    <input type="text" name="responsable"><br><br>

    <label>Fecha:</label><br>
    <input type="date" name="fecha"><br><br>

    <input type="submit" name="guardar" value="Guardar Actividad">
</form>

<hr>

<?php

$archivo = "bitacora.txt";

if(isset($_POST['guardar'])){

    $actividad = trim($_POST['actividad']);
    $responsable = trim($_POST['responsable']);
    $fecha = trim($_POST['fecha']);

    if(empty($actividad) || empty($responsable) || empty($fecha)){
        echo "<p style='color:red;'>Error: Todos los campos son obligatorios.</p>";
    }else{

        $registro = "Fecha: $fecha\n";
        $registro .= "Actividad: $actividad\n";
        $registro .= "Responsable: $responsable\n";
        $registro .= "-------------------------------\n";

        if(file_put_contents($archivo, $registro, FILE_APPEND)){
            echo "<p style='color:green;'>Actividad guardada correctamente.</p>";
        }else{
            echo "<p style='color:red;'>Error al guardar la actividad.</p>";
        }
    }
}
?>

<h2>Bitácora de Actividades</h2>

<?php
if(file_exists($archivo)){

    $contenido = file_get_contents($archivo);

    echo "<pre>$contenido</pre>";

}else{
    echo "<p>No hay actividades registradas.</p>";
}
?>

</body>
</html>