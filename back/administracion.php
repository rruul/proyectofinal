<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM administracion';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var administracion = " . $resultados . ";";
    echo "</script>";
?>