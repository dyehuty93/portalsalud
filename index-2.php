<?php
$DesdeNumero = 100;
$HastaNumero = 1000;
$numeroAleatorio = rand($DesdeNumero, $HastaNumero);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>webchat</title>
    <link rel="stylesheet" href="main.css" type="text/css" media="screen" />
    <!--[if IE]>
        <link rel="stylesheet" href="ie.css" type="text/css" media="screen" />
    <![endif]-->
</head>
<body>
    <div class="wrapper">
        <h1>Webchat</h1>
        <br />
        <div class="aux">
            <div id="container">

<form action="webchat.php" method="post" class="white-pink">
    <h1>Webchat
        <span>Introduce tu apodo y contraseña</span>
    </h1>
    <label>
        <span>Nick :</span>
        <input id="nick" type="text" name="nick" value="<?php echo "Invitado$numeroAleatorio"; ?>" placeholder="Tu nombre o apodo" />
        <input type="hidden" name="canal" value="<?php $canal = $_REQUEST["canal"]; echo "$canal"; ?>" type=text>
    </label>


     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="CONECTAR" />
    </label>
</form>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="tabs.js"></script>
</body>
</html>
