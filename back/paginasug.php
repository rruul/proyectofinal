<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM paginasug';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var paginasug = " . $resultados . ";";
    echo "</script>";
?>