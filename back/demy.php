<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM demy';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var demy = " . $resultados . ";";
    echo "</script>";
?>