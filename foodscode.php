<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodscode</title>

    <!--fonts roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Roboto:ital,wght@1,900&display=swap"
        rel="stylesheet">

    <!--fonts oswald-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Oswald:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!---Bootsrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!--Iconos-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--fronts.css-->
    <link rel="stylesheet" href="./css/Components/front.css">
    <link rel="stylesheet" href="./css/frontsprincipa.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <section class="principal testimonial1">

        <header class="header">
            <div class="header-limit">
                <a href="./foodscode.html"> <img class="logo-header" src="./imgs/Logo (1).png" alt="logo"> </a>
                <div class="search-limit">
                    <div class="group">
                        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="¿Qué vas a comer?" type="search" class="input">
                    </div>
                </div>
            </div>
        </header>

        <div class="text-white text-center me-1 mt-xxl-5">
            <div class="col-md">
                <h1 class="title-xxxlg tittle">Alegría al <span class="text-nrj title-xxxlg"> cocinar </span></h1>
                <p class="title-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nulla modi
                    reprehenderit at kkkkk</p>
            </div>

        </div>
    </section>


    <div class="text-center mt-xl-5">
        <div class="container-fluid d-flex justify-content-center mt-lg-5 mb-xl-5">
            <h2 class="mt-5 title-xxlg tit-cn">¿Qué vas a cocinar hoy?</h2>
        </div>
        <ul class="nav mt-auto d-inline-flex display-3 mb-md-1">
            <li>
                <a class="btn btn-primary btnn" href="indexC.php">Categorias</a>
            </li>

            <li>
                <a class="btn btn-primary btnn" href="indexO.php">Ocasiones</a>
            <li>
                <a class="btn btn-primary btnn" href="indexO.php">Dificultad</a>
            </li>

            <li>
                <a class="btn btn-primary btnn" href="indexC.php">Bebidas</a>
            </li>

            <li>
                <a class="btn btn-primary btnn" href="indexC.php">Sopas</a>
            </li>
        </ul>
    </div>

    <div class="container margin-tp">
        <div class="mb-1">
            <div class="food-type-limit mt-1 header-limit">
                <h2 class="mt-3 ms-3 float-right title-lg margin-t">Top 10 en recetas</h2>
            </div>
        </div>
        <div class="row gap-3 d-flex justify-content-center" style="padding-top: 5rem;">

            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Sancocho Trifásico </a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>

                        <!-- <p class="card-text text-center mt-3">corazón</p> -->
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-2.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            ENSALADA DE ATÚN</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-3.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            BLT IN A BOWL</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-4.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category text-truncate"
                            href="./detalle.html">DESAYUNO INGLÉS</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-5.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Ensalada de fideos</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col mt-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="./imgs/iimg-6.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            SCROQUETAS</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-7.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Churros</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-8.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            HUEVOS BENEDICTINOS</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-9.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Sopa de Plátano</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-4 d-flex justify-content-center">
                <div class="card cardss" style="width: 18rem;">
                    <img src="./imgs/iimg-10.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Sopa de pollo</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- </section>-->
        <div class="container-md d-flex justify-content-center mt-xl-5 mt-5">
            <p class="title-xxlg tit-cn">Lo más reciente</p>
        </div>

        <section class="container-fluid d-flex justify-content-center">

            <div class="col d-flex justify-content-center ">
                <div class="card" style="width: 18rem;">
                    <img src="./imgs/fearudd.jpg" class="card-img-top mt-3 p-2" alt="receta">
                    <div class="card-body">
                        <a class="card-title pointer text-decoration-none text-center d-block category"
                            href="./detalle.html">
                            Sandwich</a>
                        <p class="card-text text-center mt-3">
                            <img src="./imgs/like.png" alt="like" style="width:2em;">
                        </p>
                        <div class="row">
                            <div class="col-7 author-fd">60 min</div>
                            <div class="col-5 ps-5 authorleft">Fácil</div>
                        </div>
                    </div>
                </div>
            </div>

            </section>
        </div>

    <!-- contact us -->
    <footer class="container-fluid mt-5 text-grn p-0 m-0">
        <div class="container-footerr">

            <p class="badge badge-blue text-start">CONTACT US</p>
            <a class="nav-item nav-link title-lg text-white" href="ermaill:hello@foods.com">Hello@Foods.com
                <span><img src="./imgs/arrow.svg" alt="arrow"></span></a>
            <div class="d-flex justify-content-center mt-xl-5">

                <span class="fa-stack fa-lg icons-color">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                </span>

                <span class="fa-stack fa-lg icons-color">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-youtube-play fa-stack-1x"></i>
                </span>

                <span class="fa-stack fa-lg icons-color">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-facebook-f fa-stack-1x"></i>
                </span>
            </div>
        </div>
        
    </footer>


</body>

</html>