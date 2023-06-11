<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM servicios';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var servicios = " . $resultados . ";";
    echo "</script>";
?>