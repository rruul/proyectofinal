<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM usuarios';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var usuarios = " . $resultados . ";";
    echo "</script>";
?>