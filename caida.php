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
                        <li class="menu-selected"><a href="caida.php" class="text-menu-selected">CAIDA LIBRE</a></li>
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
            <h1>“Hay que tener mucho cuidado con lo que se cree saber, porque por detrás se oculta una cadena interminable de incógnitas.”</h1>
            <p> |JOSÉ SARAMAGO| </p>
        </div>
    </div>

    <div class="container-content">
        <article>
                    
            <h2> "Posici&oacute;n Total" </h2> <br>
            <form method="POST" action="">
            <p> Inserta la Velocidad Final </p>
            <input type="number" name="vf" step= "0.01">
            <br> <br>
            <p> Inserta la Velocidad Inicial </p>
            <input type="number" name="vi" step= "0.01">
            <br> <br>
            <p> Inserta el tiempo </p>
            <input type="number" name="t" step= "0.01">
            <br> <br>
            <input type="submit" value="Calcular">
            </form>
            </body> <?php
            $vf = $_POST['vf'];
            $vi = $_POST['vi'];
            $t = $_POST['t'];
            $p = ($vf + $vi)/2 *$t;
            echo "
            <h1 style=\"color: red;margin-left: 0px\">El resultado de la posicion total es: $p </h>"
            ?> 
            <br>
            <br>
            <br>
                                <body>
                                    <h2> "Velocidad Final" </h2> <br>
                                    <form method="POST" action="">
                                    <p> Inserta la Velocidad Inicial </p>
                                    <input type="number" name="vi">
                                    <br> <br>
                                    <p> Inserta el tiempo </p>
                                    <input type="number" name="t">
                                    <br> <br>
                                    <button type="submit"><span> Calcular </span></button> <br> <br>
                                    </form>
                                    </body>
                                    <?php
                                    $vi = $_POST['vi'];
                                    $t = $_POST['t'];
                                    $vf = $vi + (9.8 * $t);
                                    echo "
                                    <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad final es: $vf </h>"
                                    ?> 
                                    <br>
                                    <br>
                                    <br>
                                
            
            <h2> Posición </h2>
            <form method="POST" action="">
            <p> Inserta la Velocidad inicial</p>
            <input type="text" name="vi">
            <br> <br>
            <p> Inserta El Tiempo</p>
            <input type="text" name="t">
            <br> <br>
            <p> Tu resultado es: </p>
            <input type="submit" value="resultado">
            
            
            </form>
                 </body>
            
            <?php
            $vi = $_POST['vi'];
            $t = $_POST['t']; 
            $g = 9.8;
            $medio = 0.5;
            $sx = $vi * $t + $medio * $g * ($t* $t);
            echo "<h1 style=\"color: red;margin-left: 0px\">El resultado de la posicion total es: $sx </h>"
            ?>
            <div>
            
<br>
<br>
<br>
            
            
                                <body>
                                    <h2> "Formula 4" </h2> <br>
                                    <form method="POST" action="">
                                    <p> Inserta la Velocidad Final: </p>
                                    <input type="number" name="vf">
                                    <br> <br>
                                    <p> Inserta la Velocidad Inicial: </p>
                                    <input type="number" name="vi">
                                    <br> <br>
                                    <button type="submit"><span> Calcular </span></button> <br> <br>
                                    </form>
                                    </body>
                                    <?php
                                    $vf = $_POST['vf'];
                                    $vi = $_POST['vi'];
                                    $tgs = $vf*$vf-$vi*$vi;
                                    echo "
                                    <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad final es: $tgs </h>"
                                    ?> 

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h2> Nuestra calculadora de CAIDA LIBRE ayuda .... </h2>
                                    <p> Pero debo de dejar en claro que aun que el internet nos ayuda mucho a resolver los problemas es importante conocer como realizarlos de forma teorica, para esto te dejamos un video el cual nos ayudo mucho a realizar
                                        este trabajo aparte de basarnos en nuestros apunte del profesor que nos impartio la asignatura de Fisica
                                    </p>
                                    
                                    <br>
                                    <br>
                                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/awMylIpd3mI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                    
                                            </article>

        <div class="container-aside">	

            <aside>
                <img src="img/caida.gif" alt="">
                <h2> CINETICA </h2>
                <p><i><b>La caída libre es un movimiento rectilíneo uniformemente acelerado (m.r.u.a.) o movimiento rectilíneo uniformemente variado (m.r.u.v.) en el que se deja caer un cuerpo verticalmente desde cierta altura y no encuentra resistencia alguna en su camino.</i></b></p>
                <p>Donde: </p>
                <ul type="disc">
                    <li>
                        <p> Vf: Velocidad Final del cuerpo. Su unidad en el Sistema Internacional (S.I.) es el metro  (m/s)</p>
                    </li>
                    <li>
                        <p>V0: Velocidad Inicial</p>
                    </li>
                    <li>
                        <p> G: El valor de la aceleración de la gravedad que, en la superficie terrestre puede considerarse igual a 9.8 m/s2</p>
                    </li>
                    <li>
                        <p> T: Intervalo de tiempo durante el cual se produce el movimiento. Su unidad en el Sistema Internacional (S.I.) es el segundo (s)</p>
                    </li>
                    <li>
                        <p>H: La altura desde la que se deja caer el cuerpo. Se trata de una medida de longitud y por tanto se mide en metros.</p>
                    </li>
   
                </ul>
            </aside>

            <aside>
                <img src="img/cayo.gif" alt="">
                <h2>CONCEPTO </h2>
                <p>Se le llama caída libre al movimiento que se debe únicamente a la influencia de la gravedad. En la caída libre no se tiene en cuenta la resistencia del aire. Todos los cuerpos con este tipo de movimiento tienen una aceleración dirigida hacia abajo cuyo valor depende del lugar en el que se encuentren.
                La caída libre es un caso especial de movimiento con aceleración constante, porque la aceleración debida a la gravedad es siempre constante y hacia abajo. Esto es cierto incluso cuando un objeto es lanzado hacia arriba o tiene velocidad cero. </p>
                    <p>En la caída libre un objeto cae verticalmente desde cierta altura H despreciando cualquier tipo de rozamiento con el aire o cualquier otro obstáculo. Se trata de un movimiento rectilíneo uniformemente acelerado (m.r.u.a.) o movimiento rectilíneo uniformemente variado 
                        (m.r.u.v.) en el que la aceleración coincide con el valor de la gravedad. En la superficie de la Tierra, la aceleración de la gravedad se puede considerar constante, dirigida hacia abajo, se designa por la letra g y su valor es de 9'8m/s2 (a veces se aproxima por 10 m/s2).</p>
                       
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