<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/813c48511e.js" crossorigin="anonymous"></script>

</head>

<body>

    <header class="header">

        <div class="menu container">

            <a href="#" class="logo"><img src="imgs/15.png" alt="" class="logo"></a>

            <input type="checkbox" id="menu" />
            <label for="menu"><img src="img/iglesia.png " class="menu-icono" alt=""></label>
            <nav class="navbar">
                <ul>
                    <li><a href="crear.php">rejistrarte</a></li>
                    <li><a href="marco1.php">iniciar secion </a></li>
                    <li><a href="metodopago.php">metodos de pago</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
            </nav>

            <div>
                <ul>
                    <li class="submenu">
                        <img src="imgs/car.svg" id="img-carrito" alt="">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        |
                        <div class="header-info">
                            <div class="header-txt">
                                <h1>agrovirtual</h1>
                                <div class="prices">
                                    <p class="price-a">"De Mambita para la region del guavio, se ofrece los mejores productos del campo ."</p>
                                </div>
                                <a href="index.php" class="btn-1">Informacion</a>
                            </div>
                            <div class="header-img">
                                <img src="imgs/17.png" alt="">
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </header>


    <hr>

    <section class="promos container" id="lista-1">
        <a href="#promociones">
            <h2>Promociones</h2>
        </a>
        <div class="categories">
            <div class="categorie">
                <div class="categorie-1">
                    <h3>yuca</h3>
                    <div class="prices">
                        <p class="price-1">$50.000 la arroba</p>
                        <p class="price-2">$40.000 la arroba </p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>
                <div class="categorie-imgs">
                    <img src="imgs/19).png" alt="">
                </div>
            </div>

            <div class="categorie">
                <div class="categorie-1">
                    <h3>panela</h3>
                    <div class="prices">
                        <p class="price-1">6.000 unidad</p>
                        <p class="price-2">$4.000 unidad </p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
                <div class="categorie-imgs">
                    <img src="imgs/18.png" alt="">
                </div>
            </div>

            <div class="categorie">
                <div class="categorie-1">
                    <h3>aracacha</h3>
                    <div class="prices">
                        <p class="price-1">$7.000 el kilo</p>
                        <p class="price-2">$5.000 el kilo</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
                <div class="categoria-imgs">
                    <img src="imgs/11.png" alt="">
                </div>
            </div>

            <div class="categorie">
                <div class="categorie-1">
                    <h3>cacao </h3>
                    <div class="prices">
                        <p class="price-1">$10.000 k</p>
                        <p class="price-2">$8.000 k</p>
                    </div>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
                <div class="categorie-imgs">
                    <img src="imgs/13.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <hr>


    <section class="products container" id="lista-2">

        <h2>Nuevos Productos</h2>

        <div class="swiper mySwiper-2">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="product">
                        <img src="imgs/16.png" alt="">
                        <div class="product-txt">
                            <h3>maiz</h3>
                            <p>100% organico</p>
                            <p class="precio">$50.000  1 arroba</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="product">
                        <img src="imgs/12.png" alt="">
                        <div class="product-txt">
                            <h3>bananos</h3>
                            <p>100% organico </p>
                            <p class="precio">$ 3000 1 kilo</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="product">
                        <img src="imgs/10.png" alt="">
                        <div class="product-txt">
                            <h3>aguacate</h3>
                            <p>100% organicos</p>
                            <p class="precio">$3.000 unidad </p>
                            <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="product">
                        <img src="imgs/20.png" alt="">
                        <div class="product-txt">
                            <h3>zapote</h3>
                            <p>100% organico</p>
                            <p class="precio">$4.000 1 kilo</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                        </div>
                    </div>

                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <hr>

    <section class="products container" id="lista-3">
        <h2>Productos</h2>
        <div class="swiper mySwiper-2">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="product">
                        <img src="imgs/21.png" alt="">
                        <div class="product-txt">
                            <h3>mamdarina</h3>
                            <p>100% organica</p>
                            <p class="precio">$5.000 1 kilo</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="imgs/22.png" alt="">
                        <div class="product-txt">
                            <h3>platano</h3>
                            <p>100% de calidad</p>
                            <p class="precio">$5.000 1 kilo</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <img src="imgs/23.png" alt="">
                        <div class="product-txt">
                            <h3>cafe</h3>
                            <p>100% calidad</p>
                            <p class="precio">$10.000 1 kilo en pepa</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="11">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product">
                        <img src="imgs/24.png" alt="">
                        <div class="product-txt">
                            <h3>naranja</h3>
                            <p>100% calidad</p>
                            <p class="precio">$6.000 la docena</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="12">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product">
                        <img src="imgs/25.png" alt="">
                        <div class="product-txt">
                            <h3>frijo</h3>
                            <p>100% calidad</p>
                            <p class="precio">$16.00 1 kilo</p>
                            <a href="#" class="agregar-carrito btn-3" data-id="13">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    

</body>

</html>