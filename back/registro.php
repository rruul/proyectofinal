<?php
    include './conexion.php';
    if(!empty($_POST["btnregistro"])){
        if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["numero"]) || empty($_POST["descripcion"]) ){
            echo '<div class="alert alert-danger">CAMPO/S VACIO/S</div>';
        } else {
            $nombre = $_POST['nombre'];
            $correo = $_POST['descripcion'];
            $numero = $_POST['horas'];
            $descripcion = $_POST['descripcion'];

            
            $queryusu = "INSERT INTO usuarios (nombrecompleto, correo, numero, descripcion) 
            VALUES('$nombre', '$correo', '$numero', '$descripcion')";
            $resultadosb = mysqli_query($conn, $queryusu);
            if($resultadosb) {
                header('location: ./registroalumnos.php');
            } else {
                echo '<div class="alert alert-danger">ERROR INESPERADO, INTENTE MAS TARDE</div>';
            } 
                
        }
    } 
?>