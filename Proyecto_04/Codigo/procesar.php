<?php

// Capturar datos enviados desde el formulario
$productos = $_POST['producto'];
$precios = $_POST['precio'];

// Calcular total
$total = array_sum($precios);

// Calcular promedio
$promedio = $total / count($precios);

// Obtener precio máximo y mínimo
$precioMayor = max($precios);
$precioMenor = min($precios);

// Buscar posición del producto más caro y más barato
$indiceMayor = array_search($precioMayor, $precios);
$indiceMenor = array_search($precioMenor, $precios);

// Obtener nombres de productos
$productoMayor = $productos[$indiceMayor];
$productoMenor = $productos[$indiceMenor];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>

    <style>
        table{
            border-collapse: collapse;
            width: 60%;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: lightgray;
        }
    </style>
</head>
<body>

    <h2>Resultados del Inventario</h2>

    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>

        <?php
        for($i = 0; $i < count($productos); $i++){
            echo "<tr>";
            echo "<td>".$productos[$i]."</td>";
            echo "<td>$".$precios[$i]."</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <br>

    <h3>Total de productos: $<?php echo $total; ?></h3>

    <h3>Promedio de precios: $<?php echo number_format($promedio,2); ?></h3>

    <h3>Producto más caro:
        <?php echo $productoMayor . " ($" . $precioMayor . ")"; ?>
    </h3>

    <h3>Producto más barato:
        <?php echo $productoMenor . " ($" . $precioMenor . ")"; ?>
    </h3>

</body>
</html>