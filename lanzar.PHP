<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CINETICA | FISICA</title>
    <link rel="icon" href="img/mundo.jpg">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <h1>CINETICA Y <b>CAIDA LIBRE </b></h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                    <li><a href="inicio.html"> <i class="fas fa-home"></i> INICIO </a></li>
                        <li><a href="fisica.html">FISICA</a></li>
                        <li><a href="velocidad.PHP">  VELOCIDAD </a></li>
                        <li><a href="aceleracion.php"> ACELERACIÓN </a></li>
                        <li><a href="caida.php">CAIDA LIBRE</a></li>
                        <li  class="menu-selected" ><a href="lanzar.PHP" class="text-menu-selected">LANZAMIENTO HORIZONTAL </a></li>
                        <li><a href="referencia.html">PROYECTO</a></li>
                    </ul>
                </nav>

            </div>

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>

    <!--Portada-->

    <div class="container-all" id="move-content">

    
    <div class="container-cover">
        <div class="container-info-cover">
            <h1>“Todo lo que el hombre puede ganar al juego de la peste y de la vida es el conocimiento y el recuerdo…”</h1>
            <p>|ALBERT CAMUS|</p>
        </div>
    </div>

    <div class="container-content">
        <article>
            <h2> Posici&oacute;n Horizontal </h2> <br>
            <form method="POST" action="">
            <p> Inserta la Velocidad Inicial en el eje x: </p>
            <input type="number" name="vi" step="0.01">
            <br> <br>
            <p> Inserta el Tiempo: </p>
            <input type="number" name="t" step= "0.01">
            <br> <br>
            <input type="submit" value="Calcular">
            </form>
            </body>
            <?php
            $vi = $_POST['vi'];
            $t = $_POST['t'];
            $ph = $t*$vi;
            echo "
            <h1 style=\"color: red;margin-left: 0px\">El resultado de la Posición Horizontal es: $ph </h>"
            ?> 
            <br>
            <br>
            <br>

<h2> "Posici&oacute;n Vertical" </h2> <br>
<form method="POST" action="">
<p> Inserta el tiempo </p>
<input type="number" name="t" step= "0.01">
<br> <br>
<input type="submit" value="Calcular">
</form>
</body> <?php
$g = 9.8;
$t = $_POST['t'];
$pv = $g*($t*$t)/2;
echo "
<h1 style=\"color: red;margin-left: 0px\">El resultado de la posición Vertical es: $pv </h>"
?> 
<br>
<br>
<br>

<h2> Velocidad En x </h2> <br>
<form method="POST" action="">
<p> Inserta la Velocidad Inicial en el eje x: </p>
<input type="number" name="vix" step="0.01">
<br> <br>
<input type="submit" value="Calcular">
</form>
</body>
<?php
$vix = $_POST['vix'];
$vx = $vix;
echo "<center><h3><b>El resultado de La Velocidad en x es directamente proporcional: $vx m/s</b></h3></center>";
?>
<br>
<br>
<br>

<h2> Velocidad en Y </h2> <br>
<form method="POST" action="">
<label>Ingresa el valor del tiempo:</label>
<input type="number" name="t" step="0.01">
<br><br>
<input type="submit" value="Calcular Valores">
</form>
</body>
<?php
$t = $_POST['t'];
$g = 9.8;
$vy = $t*$g;
echo "
<h1 style=\"color: red;margin-left: 0px\">El resultado de la Velocidad en Y es: $vy </h>"
?> 

            
<br>
<br>
<br>

<h2> Nuestra calculadora de LANZAMIENTO HORIZONTAL ayuda .... </h2>
                                    <p> Pero debo de dejar en claro que aun que el internet nos ayuda mucho a resolver los problemas es importante conocer como realizarlos de forma teorica, para esto te dejamos un video el cual nos ayudo mucho a realizar
                                        este trabajo aparte de basarnos en nuestros apunte del profesor que nos impartio la asignatura de Fisica
                                    </p>
 <br>
 <br>
 <center><iframe width="560" height="315" src="https://www.youtube.com/embed/Ho9LagzvjKM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                    
</article>

        <div class="container-aside">	

            <aside>
                <img src="img/ecuacion.png" alt="">
                <h2> LANZAMIENTO HORIZONTAL </h2>
                <p><i><b>El lanzamiento horizontal resulta de la composición de un movimiento rectilíneo uniforme (mru horizontal) y un movimiento rectilíneo uniformemente acelerado de caída libre (mrua vertical).El lanzamiento horizontal consiste en lanzar un cuerpo horizontalmente desde cierta altura.</i></b></p>

            </aside>

            <aside>
                <img src="img/tema5.jpg" alt="">
                <h2>CONCEPTO </h2>
                <p>El lanzamiento horizontal ocurre cuando un objeto abandona su posición de inicio únicamente con la velocidad inicial en el eje x. En este tipo de lanzamiento, generalmente tendremos un movimiento uniforme en el eje x con velocidad inicial constante y un movimiento acelerado con aceleración a=−g en el eje y.</p>
                <p>El lanzamiento horizontal, también denominado tiro horizontal, es un ejemplo de composición de movimientos en dos dimensiones: un m.r.u. en el eje horizontal y un m.r.u.a. en el vertical. El lanzamiento horizontal consiste en lanzar un cuerpo horizontalmente desde cierta altura. En la siguiente figura puedes ver una representación de la situación: </p>               
                <p> La caída libre es un caso especial de movimiento con aceleración constante, porque la aceleración debida a la gravedad es siempre constante y hacia abajo. Esto es cierto incluso cuando un objeto es lanzado hacia arriba o tiene velocidad cero. </p>
                <p>Uno de los primeros científicos que describió el movimiento de un proyectil fue Galileo. Él explicó cómo este movimiento se puede comprender analizando por separado los componentes horizontal y vertical del movimiento. El movimiento de proyectil más simple es el lanzamiento horizontal, en que un objeto sale impulsado horizontalmente y luego comienza a caer debido a la gravedad.</p>
                       
            </aside>

        </div>
    </div>

    <div class="container-footer">	

        <footer>

            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4>EQUIPO 7 PROYECTO FINAL</h4>

        </footer>

    </div>

</div>

    <script src="js/script.js"></script>
</body>
</html>