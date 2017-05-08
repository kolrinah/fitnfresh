<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Fit n Fresh Concessions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msvalidate.01" content="119885FDA0CD1881FD234F73DD1A101E" />
    <link rel="icon" type="image/x-icon" href="../img/fitnfreshico.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/fitnfreshico.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/fitnfresh.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Lato|Patrick+Hand|Annie+Use+Your+Telescope|Stalemate" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body style="text-align: center">

    <div style="width: 100%;">
        <a href="../" style="cursor: pointer" title="GO BACK!">
            <img alt="Fit-n-Fresh Concessions" src="../img/fitnfreshlogo.png" >
        </a>
    </div>

    <?php

        if ($_POST){
            $msg = $_POST['message'];
            $email = $_POST['email'];
            $to = "fitnfreshconcessions@gmail.com";
            $name = $_POST['name'];
            $subject = "Contact from: $name <$email>";
            $headers = "From: Fit-n-Fresh Concessions<no-reply@fitnfreshconcessions.com>" . "\r\n" .
                       "CC: $name <$email> \r\n";
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);

            // send email
            mail($to, $subject, $msg, $headers);

            if (isset($_POST['spanish'])){
                echo "<h2>Mensaje Enviado Exitosamente!</h2>";
                echo "<h2>Estaremos comunicándonos con ud. en las próximas 24 horas.</h2>";
            }else{
                echo "<h2>Message Successfully Sent!</h2>";
                echo "<h2>We'll get back to you within 24 hours.</h2>";
            }

        }
        /*$mysqli = new mysqli("ejemplo.com", "usuario", "contraseña", "basedatos");
        $resultado = $mysqli->query("SELECT '¡Hola, querido usuario de MySQL!' AS _message FROM DUAL");
        $fila = $resultado->fetch_assoc();
        echo htmlentities($fila['_message']);*/
        unset($_POST);
    ?>
 </body>
</html>