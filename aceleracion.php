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
                        <li><a href="fisica.html" >FISICA</a></li>
                        <li><a href="velocidad.PHP">  VELOCIDAD </a></li>
                        <li class="menu-selected"><a href="aceleracion.php" class="text-menu-selected"> ACELERACIÓN </a></li>
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
            <h1>“Dejamos de temer aquello que se ha aprendido a entender.”</h1>
            <p> |MARIE CURIE| </p>
        </div>
    </div>

    <div class="container-content">
        <article>
                
            <h2> CALCULAR LA ACELERACION </h2> <br>
            <form method="POST" action="">
            <p> Inserta la Velocidad Final: </p>
            <input type="number" name="vf" step="0.01">
            <br> <br>
            <p> Inserta el velocidad Inicial: </p>
            <input type="number" name="vi" step= "0.01">
            <p> Inserta el Tiempo: </p>
            <input type="number" name="t" step= "0.01">
            <br> <br>
            <input type="submit" value="Calcular">
            </form>
            </body>
            <?php
            $vf = $_POST['vf'];
            $vi = $_POST['vi'];
            $t = $_POST['t'];
            $a = ($vf-$vi)/$t;
            echo "<h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $a </h>"
            ?> 
                            
<br>
<br>
<br>
                            
            <h2> CALCULAR EL TIEMPO </h2> <br>
            <form method="POST" action="">
            <p> Inserta la Velocidad Final: </p>
            <input type="number" name="vf" step="0.01">
            <br> <br>
            <p> Inserta el velocidad Inicial: </p>
            <input type="number" name="vi" step= "0.01">
            <p> Inserta el Aceleracion: </p>
            <input type="number" name="a" step= "0.01">
            <br> <br>
            <input type="submit" value="Calcular">
            </form>
            </body>
            <?php
            $vf = $_POST['vf'];
            $vi = $_POST['vi'];
            $a = $_POST['a'];
            $t = ($vf-$vi)/$a;
            echo "
            <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $t </h>"
            ?> 
<br>
<br>
<br>
                            <h2> CALCULAR LA VELOCIDAD FINAL </h2> <br>
                    <form method="POST" action="">
                    <p> Inserta la Velocidad Inicial: </p>
                    <input type="number" name="vi" step="0.01">
                    <br> <br>
                    <p> Inserta la Aceleracion: </p>
                    <input type="number" name="a" step= "0.01">
                    <p> Inserta el Tiempo: </p>
                    <input type="number" name="t" step= "0.01">
                    <br> <br>
                    <input type="submit" value="Calcular">
                    </form>
                    </body>
                    <?php
                    $vi = $_POST['vi'];
                    $a= $_POST['a'];
                    $t = $_POST['t'];
                    $vf = $vi+$a*($t);
                    echo "
                    <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $vf </h>"
                    ?> 
                    <br>
                    <br>
                    <br>

            <h2> CALCULAR LA VELOCIDAD INICIAL </h2> <br>
            <form method="POST" action="">
            <p> Inserta la Distancia: </p>
            <input type="number" name="d" step="0.01">
            <br> <br>
            <p> Inserta el Tiempo: </p>
            <input type="number" name="t" step= "0.01">
            <p> Inserta el Velocidad Final: </p>
            <input type="number" name="vf" step= "0.01">
            <br> <br>
            <input type="submit" value="Calcular">
            </form>
            </body>
            <?php
            $vf = $_POST['vf'];
            $d = $_POST['d'];
            $t = $_POST['t'];
            $vi = 2*($d/$t)-($vf);
            echo "
            <h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad final es: $vi </h>"
            ?> 

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2> Nuestra calculadora de ACELERACION ayuda .... </h2>
            <p> Pero debo de dejar en claro que aun que el internet nos ayuda mucho a resolver los problemas es importante conocer como realizarlos de forma teorica, para esto te dejamos un video el cual nos ayudo mucho a realizar
                este trabajo aparte de basarnos en nuestros apunte del profesor que nos impartio la asignatura de Fisica
            </p>
            
            <br>
            <br>
           <center> <iframe width="560" height="315" src="https://www.youtube.com/embed/0F_lkIFHLQA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>          


        </article>

        <div class="container-aside">	

            <aside>
                <img src="img/aceleracion1.jpg" alt="">
                <h2> ACELERACIÓN</h2>
                <p><i>Para la aceleración instantánea, tendrías que encontrar la tasa de cambio en un momento particular en el tiempo, lo cual a menudo requiere cálculo. Afortunadamente para nosotros, la mayoría de los ejemplos introductorios de la física que están basados en álgebra 
                    consideran situaciones donde la aceleración es constante, en cuyo caso la tasa de cambio sobre cualquier intervalo es la misma que la tasa de cambio en cualquier momento.</i></p>
                    <p>Donde: </p>
                    <ul type="disc">
                        <li>
                            <p> A: es la aceleracion</p>
                        </li>
                        <li>
                            <p>Vf: Velocida Final </p>
                        </li>
                        <li>
                            <p>Vi: Velocidad Inicial </p>
                        </li>
                        <li>
                            <p>T: Tiempo empleado en realizar el movimiesnto</p>
                        </li>

                         </ul>
                </aside>

            <aside>
                <img src="img/acele.png" alt="">
                <h2> CONCEPTO </h2>
                <p>En física, la aceleración es una magnitud derivada vectorial que nos indica la variación de velocidad por unidad de tiempo. Comparada con el desplazamiento y la velocidad, la aceleración es como el dragón enojado que escupe fuego de las variables de movimiento. La aceleración es el nombre que le damos a cualquier proceso en donde la velocidad cambia que nos indica que tan rápido cambio la 
                    velocidad en determinado intervalo de tiempo. Como la velocidad es una rapidez y una dirección, solo hay dos maneras para que aceleres: cambia tu rapidez o cambia tu dirección (o cambia ambas).</p>
                
            </aside>

            <aside>
                <img src="img/imagina.png" alt="">
                <h2>¿VELOCIDAD Y ACELERACION ES LO MISMO?</h2>
                <p> "La aceleración y la velocidad son básicamente la misma cosa ¿cierto?" Falso. A menudo la gente piensa de manera equivocada que si la velocidad de un objeto es grande, entonces la aceleración también debe ser grande. piensa que si la velocidad de un objeto es pequeña, significa que la aceleración debe ser pequeña. El valor de la velocidad en un momento dado no determina la aceleración. En otras palabras, yo puedo estar cambiando mi velocidad a una tasa muy grande sin importar si actualmente me estoy moviendo lenta o rápidamente.</p>
                         <p>Si la aceleración apunta en la misma dirección que la velocidad, el objeto aumentará su rapidez, y si la aceleración apunta en la dirección opuesta de la velocidad, el objeto disminuirá su rapidez. Revisa las aceleraciones en el siguiente diagrama, en donde un automóvil 
                            accidentalmente se mete al lodo (que lo hace disminuir su rapidez) o persigue una dona (que lo hace aumentar su rapidez). Si suponemos que ir hacia la derecha tiene signo positivo, la velocidad es positiva siempre que el automóvil se mueva hacia la derecha, y la velocidad es negativa siempre que el automóvil se mueva hacia la izquierda. La aceleración apunta en la misma dirección que la velocidad si el automóvil está aumentando su rapidez, y apunta en la dirección contraria si el automóvil está disminuyendo su rapidez.</p>
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