<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM ing_electrica';
    $resultado = mysqli_query($conn, $sql);

    $arreglon = array();

    while ($row = $resultado->fetch_assoc()) {
        $arreglon[] = $row;
    }

    $resultados = json_encode($arreglon);

    echo "<script>";
    echo "var ing_elec = " . $resultados . ";";
    echo "</script>";
?>