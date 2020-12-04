<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CS Land | Tienda</title>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="img/icono.png">
    </head>

    <body>
        <header class="site-header tienda">
            <div class="contenido-header">
                <div class="navbar">
                <?php
                        include_once 'includes/templates/navbar.php';
                    ?>
                </div>
                <h1 class="texto-titulo">TIENDA</h1>
            </div>
        </header>

        <section class="seccion contenedor">
            <h2 class="contenedor centrar-texto">Nuevos Productos</h2>
            <div class="vista-tienda">
                <div class="producto">
                    <div class="imagen-prod">
                        <img src="img/beyonce-tienda-home.png" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Playera Oficial del Album "Black is King"</h4>
                        <p>Playera en tallas S/M/L. Oficial. Varios Colores</p>
                        <p class="precio">$900.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
                <div class="producto">
                    <div class="imagen-prod">
                        <img src="img/sia-tienda-home.jpg" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Some People Have Real Problems T-Shirt</h4>
                        <p>Playera en tallas S/M/L. Semi Oficial. Varios Colores</p>
                        <p class="precio">$300.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
                <div class="producto">
                    <div class="imagen-prod">
                        <img src="img/harry-tienda-home.jpg" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Fine Line Playera Negra</h4>
                        <p>Playera en tallas S/M/L. Oficial. Limitada</p>
                        <p class="precio">$650.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
            </div>
        </section>
        <hr>
        <main class="contenedor">
            <h1 class="centrar-texto">Lo MAS Comprado</h1>
            <div class="contenido-lo-mas-comprado">
                <div class="texto-t1">
                    <h3>1. Fundas de "Adele Live 2017"</h3>
                    <p>Desde $1,234.00</p>
                    <a class="boton-base boton-azul" href="./tienda/1.html">Comprar</a>
                </div>
                <img src="./img/tienda-funda.jpg" alt="">
            </div>
            <div class="vista-tienda">
                <div class="producto-t">
                    <div class="imagen-prod">
                        <img src="img/tienda/lady-gaga-tienda-2.png" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Playera Large Chromatica 2020 Negra</h4>
                        <p>Playera manga larga tallas S/M Oficial. Solo Color Negro</p>
                        <p class="precio">$700.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
                <div class="producto-t">
                    <div class="imagen-prod">
                        <img src="img/tienda/lady-gaga-tienda-3.png" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Short Chromatica PINK</h4>
                        <p>Short de licra tallas S/M/L/XL Oficial. Solo Color Rosa. Limitado</p>
                        <p class="precio">$964.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
                <div class="producto-t">
                    <div class="imagen-prod">
                        <img src="img/tienda/dua-lipa-tienda-1.jpg" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Calcetas Yellow Nostalgic</h4>
                        <p>Par de calcetines de vestir algodón Oficial
                        </p>
                        <p class="precio">$250.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
                <div class="producto-t">
                    <div class="imagen-prod">
                        <img src="img/tienda/harry-tienda-2.jpg" alt="" srcset="">
                    </div>
                    <div class="texto-prod">
                        <h4>Fine Line Portada Playera</h4>
                        <p>Playera tallas XS/S/M Oficial. Colores Azul/Negra/Gris</p>
                        <p class="precio">$650.00</p>
                    </div>
                    <a class="boton-base boton-azul" href=""> Comprar</a>
                </div>
        </main>
        <hr>
        <section class=" contenedor  seccion">
            <h1 class="centrar-texto">Las mejores ofertas</h1>
            <div class="descuento">
                <h3 class="centrar-texto">25% de Descuento. </h3>
                <div class="producto-d">
                    <div class="texto-desc">
                        <h5>Cartera Estilo "Fine Line"</h5>
                        <p>$648.00 Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugiat explicabo dolore reiciendis </p>

                    </div>
                    <a class="boton-base boton-azul" href="">Comprar</a>
                </div>
                <div class="producto-d">
                    <div class="texto-desc">
                        <h5>Position Delux Shirt</h5>
                        <p>$1,648.00 Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugiat explicabo dolore reiciendis </p>

                    </div>
                    <a class="boton-base boton-azul" href="">Comprar</a>
                </div>
                <div class="producto-d">
                    <div class="texto-desc">
                        <h5>BlakPink Sweter THE ALBUM </h5>
                        <p>$2,056.00Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugiat explicabo dolore reiciendis </p>

                    </div>
                    <a class="boton-base boton-azul" href="">Comprar</a>
                </div>
                <div class="producto-d">
                    <div class="texto-desc">
                        <h5>Playera estilo "BE"</h5>
                        <p>$988.98 Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugiat explicabo dolore reiciendis </p>
                    </div>
                    <a class="boton-base boton-azul" href="">Comprar</a>
                </div>
            </div>
        </section>

        <?php
    include_once 'includes/templates/footer.php';
    ?>

    </body>

</html>