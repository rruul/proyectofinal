<?php
    if($_POST){
        $asunto = "";
        $correo = "";
        $mensaje = "";
        $destinatario = "";

        if(isset($_POST['asunto'])) {
            $asunto = filter_var(trim($_POST['asunto']), FILTER_SANITIZE_STRING);
        }
        if(isset($_POST['correo'])) {
            $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_STRING);
        }
        if(isset($_POST['mensaje'])) {
            $mensaje = filter_var(trim($_POST['mensaje']), FILTER_SANITIZE_STRING);   
        }
        if(isset($_POST['destinatario'])) {
            $destinatario = filter_var(trim($_POST['destinatario']), FILTER_SANITIZE_STRING);   
        }

        if(empty($asunto)){
            echo '<div class="alert alert-danger text-center">Porfavor pon un asunto</div>';
            return;
        }
        if(empty($correo)){
            echo '<div class="alert alert-danger text-center">Por favor pon tu correo, para poder recibir una respuesta</div>';
            return;
        }
        if(empty($mensaje)){
            echo '<div class="alert alert-danger text-center">Por favor pon un mensaje</div>';
            return;
        }
        $cuerpo = 'Correo: ' . $correo . "<br>";
        $cuerpo = 'Mensaje: ' . $mensaje . "<br>";

        $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=utf-8' . "\r\n" . 'From: ' . $correo . "\r\n" ;

        if(mail($destinatario, $asunto, $cuerpo, $headers)) {
                echo'<div class="alert alert-success text-center">Correo enviado correctamente</div>';
                sleep(2);
                header("../front/administracion.php");
        } else {
            echo '<div class="alert alert-danger text-center">No se pudo enviar el correo</div>';
            return;
        }

    }
    ob_flush();
?>