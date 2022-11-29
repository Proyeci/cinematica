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
                        <li class="menu-selected"><a href="velocidad.PHP"  class="text-menu-selected">  VELOCIDAD </a></li>
                        <li><a href="aceleracion.php"> ACELERACIÓN </a></li>
                        <li><a href="caida.php">CAIDA LIBRE</a></li>
                        <li><a href="lanzar.PHP">LANZAMIENTO HORIZONTAL </a></li>
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
            <h1>“La inteligencia académica no ofrece la menor preparación para la multitud de dificultades –o de oportunidades– a la que deberemos enfrentarnos a lo largo de nuestra vida.”</h1>
            <p> |DANIEL GOLEMAN| </p>
        </div>
    </div>

    <div class="container-content">
        <article>

        <h2> CALCULAR LA VELOCIDAD </h2> <br>
                    <form method="POST" action="">
                    <p> Inserta la distancia: </p>
                    <input type="number" name="dis" step="0.01">
                    <br> <br>
                    <p> Inserta el tiempo: </p>
                    <input type="number" name="t" step= "0.01">
                    <br> <br>
                    <input type="submit" value="CALCULAR">
                    </form>
                    </body>
                    <?php
                    $d = $_POST['dis'];
                    $t = $_POST['t'];
                    $v = $d/$t;
                    echo "
                    <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $v </h1>"
                    ?> 
<br>
<br>
<br>
                <h2> CALCULAR LA DISTANCIA </h2> <br>
        <form method="POST" action="">
        <p> Inserta la velocidad: </p>
        <input type="number" name="v" step="0.01">
        <br> <br>
        <p> Inserta el tiempo: </p>
        <input type="number" name="t" step= "0.01">
        <br> <br>
        <input type="submit" value="CALCULAR">
        </form>
        </body>
        <?php
        $v = $_POST['v'];
        $t = $_POST['t'];
        $d = $v*$t;
        echo "
        <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $d </h1>"
        ?> 

        <br>
        <br>
        <br>
                

<h2> CALCULAR EL TIEMPO </h2> <br>
<form method="POST" action="">
<p> Inserta la distancia: </p>
<input type="number" name="dis" step="0.01">
<br> <br>
<p> Inserta el velocidad: </p>
<input type="number" name="v" step= "0.01">
<br> <br>
<input type="submit" value="CALCULAR">
</form>
</body>
<?php
$d = $_POST['dis'];
$v = $_POST['v'];
$t = $d/$v;
echo "
<h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $t </h1>"
?> 

<br>
<br>
<br>
<br>
<br>
<br>
<h2> Nuestra calculadora de velocidad ayuda .... </h2>
<p> Pero debo de dejar en claro que aun que el internet nos ayuda mucho a resolver los problemas es importante conocer como realizarlos de forma teorica, para esto te dejamos un video el cual nos ayudo mucho a realizar
    este trabajo aparte de basarnos en nuestros apunte del profesor que nos impartio la asignatura de Fisica
</p>

<br>
<br>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/9VusannEDJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>

        </article>


        <div class="container-aside">	

            <aside>
                <img src="img/velocidad.png" alt="">
                <h2> LA VELOCIDAD  </h2>
                <p><i>La velocidad puede definirse como la cantidad de espacio recorrido por unidad de tiempo con la que un cuerpo se desplaza en una determinada dirección y sentido. Se trata de un vector cuyo módulo, su valor numérico, se puede calcular mediante la expresión anterior</i></p>
 
            <ul type="disc">
                <li><p> V: Módulo de la velocidad del cuerpo. Su unidad de medida en el Sistema Internacional (S.I.) es el metro por segundo (m/s)</p>  </li>
                <li> <p> D: Módulo del desplazamiento. Su unidad de medida en el Sistema Internacional (S.I.) es el metro (m)</p> </li>
                <li> <p> T: Tiempo empleado en realizar el movimiento. Su unidad de medida en el Sistema Internacional (S.I.) es el segundo (s)</p> </li>
                 </ul>
        </aside>

            <aside>
                <img src="img/tema3.png" alt="">
                <h2>CONCEPTO  </h2>
                <p>El concepto de velocidad está asociado al cambio de posición de un cuerpo a lo largo del tiempo; durante el movimiento de este, puede realizar diferentes desplazamientos en intervalos de tiempos diferentes, de modo que la velocidad cambie cada momento. 
                    Cuando necesitamos información sobre la dirección y el sentido del movimiento, así como su rapidez recurrimos a la velocidad. La velocidad es una magnitud vectorial y, como tal, se representa mediante flechas que indican la dirección y sentido del movimiento que sigue un cuerpo y cuya longitud representa el valor numérico o módulo de la misma. Depende de el desplazamiento, es decir, 
                    de los puntos inicial y final del movimiento, y no como la rapidez, que depende directamente de la trayectoria.</p>
                <p> Su unidad de medida en el Sistema Internacional (S.I.) es el metro por segundo (m/s), esto quiere decir que cuando por ejemplo afirmamos que la velocidad (módulo) de un cuerpo es de 5 metros por segundo (m/s), estamos indicando que cada segundo ese mismo cuerpo se desplaza 5 metros. </p>
                
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