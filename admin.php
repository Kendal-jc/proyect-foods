<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/Components/front.css">
    <link rel="stylesheet" href="./css/frontsprincipa.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body-admin">
    <section class="admin-page">
        <header class="admin-header mt-3">
            <div class="admin-limit">
                <div class="d-flex justify-content-center">
                    <h1 class="tittle-admin-h">Perfil de administrador</h1>
                </div>
            </div>
            <div class=" justify-content-end">
                <button class="button mt-3">Cerrar sesión</button>
            </div>
        </header>



        <div class="container mt-5">
            <div class="row">
                <div class="col-md prueba-c">
                    <h3 class="mb-4 tittle-recipe">Registrar una receta</h3>
                    <div class="admin-inputs-divs">
                        <h4>Nombre de la receta:</h4>
                        <input class="admin-inputs" type="Name">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Tiempo de preparación:</h4>
                        <input class="admin-inputs" type="Number">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Tiempo de cocción:</h4>
                        <input class="admin-inputs" type="Number">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Tiempo total:</h4>
                        <input class="admin-inputs" type="number">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Porciones:</h4>
                        <input class="admin-inputs" type="Name">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Nivel de complejidad:</h4>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Fácil...</option>
                                <option value="1">Intermedio</option>
                                <option value="2">Avanzado</option>
                            </select>
                        </div>
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Categoría:</h4>
                        <div class="input-group mb-3 ms-4">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Desayuno...</option>
                                <option value="1">Bebidas</option>
                                <option value="2">Entradas</option>
                                <option value="3">Almuerzo</option>
                                <option value="4">Postres</option>
                                <option value="5">Sopas</option>
                            </select>
                        </div>
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Ocasión:</h4>
                        <div class="input-group mb-3 ms-4">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Todas...</option>
                                <option value="1">Desayuno</option>
                                <option value="1">Día del padre</option>
                                <option value="2">Día de la madre</option>
                                <option value="3">Día del niño</option>
                                <option value="4">Navidad</option>
                                <option value="5">Semana santa</option>
                                <option value="6">Verano</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md prueba-r">
                    <div class="admin-inputs-divs">
                        <h4>Descripción:</h4>
                        <input class="admin-inputs-h" type="Name">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>ingredientes:</h4>
                        <input class="admin-inputs-h" type="Name">
                    </div>
                    <div class="admin-inputs-divs">
                        <h4>Instrucciones:</h4>
                        <input class="admin-inputs-h" type="Name">
                    </div>
                    <h4 class="">Imagen de la receta:</h4>
                    <div class="input-group mb-3 admin-inputs-divs">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Subir</label>
                    </div>
                    <div class=" justify-content-end">
                        <button class="button2 mt-3 ms-5">Subir receta</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-page">
        <!-- <nav class="d-flex justify-content-center"> 
            <div class="d-flex justify-content-center mt-5">
                <h2 class="">Recetas subidas</h2>
            </div>-->

        <div class="container mt-sect">
            <div class="mb-1">
                <div class="food-type-limit mt-1 header-limit">
                    <h2 class="mt-3 ms-3 float-right title-lg">Recetas subidas</h2>
                </div>
            </div>
            <div class="row gap-3 mt-3">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="comida">
                        <div class="card-body">
                            <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category"
                                href="./detalle.html">
                                Sopa de pollo</a>

                            <p class="card-text text-center mt-3">
                                <img src="./imgs/like.png" alt="like" style="width:2em;">
                            </p>
                            <div class="row">
                                <div class="col-7">60 min</div>
                                <div class="col-5 ps-5">Fácil</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./imgs/iimg-2.jpg" class="card-img-top mt-3 p-2" alt="comida">
                        <div class="card-body">
                            <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category"
                                href="./detalle.html">
                                ENSALADA DE ATÚN</a>
                            <p class="card-text text-center mt-3">
                                <img src="./imgs/like.png" alt="like" style="width:2em;">
                            </p>
                            <div class="row">
                                <div class="col-6">60 min</div>
                                <div class="col-6 ps-5">Fácil</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./imgs/iimg-3.jpg" class="card-img-top mt-3 p-2" alt="comida">
                        <div class="card-body">
                            <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category"
                                href="./detalle.html">
                                BLT IN A BOWL</a>
                            <p class="card-text text-center mt-3">
                                <img src="./imgs/like.png" alt="like" style="width:2em;">
                            </p>
                            <div class="row">
                                <div class="col-6">60 min</div>
                                <div class="col-6 ps-5">Fácil</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./imgs/iimg-4.jpg" class="card-img-top mt-3 p-2" alt="comida">
                        <div class="card-body">
                            <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category"
                                href="./detalle.html">
                                DESAYUNO INGLÉS</a>
                            <p class="card-text text-center mt-3">
                                <img src="./imgs/like.png" alt="like" style="width:2em;">
                            </p>
                            <div class="row">
                                <div class="col-6">60 min</div>
                                <div class="col-6 ps-5">Fácil</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-sect">
                    <div class="mb-1">
                        <div class="food-type-limit mt-1 header-limit">
                            <h2 class="mt-3 ms-3 float-right title-lg">Usuarios registrados</h2>
                        </div>
                    </div>

                    <div class="row gap-3 mt-3">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/perfil.png" class="card-img-top mt-3 p-2" alt="receta para editar o subir"">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category">
                                        Usuario</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color">Eliminar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color">Editar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/perfil.png" class="card-img-top mt-3 p-2" alt="receta para editar o subir"">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category">
                                        Usuario</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color">Eliminar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color">Editar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/perfil.png" class="card-img-top mt-3 p-2" alt="receta para subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category">
                                        Usuario</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color">Eliminar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color">Editar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/perfil.png" class="card-img-top mt-3 p-2" alt="receta para editar o subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin category">
                                        Usuario</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color">Eliminar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color">Editar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-sect">
                    <div class="mb-1">
                        <div class="food-type-limit mt-1 header-limit">
                            <h2 class="mt-3 ms-3 float-right title-lg">Recetas en revición</h2>
                        </div>
                    </div>

                    <div class="row gap-3 mt-3">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="receta para subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin"
                                        href="./detalle.html">
                                        Sopa de pollo</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color-a">Rechazar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color-r">Aceptar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="receta para subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin"
                                        href="./detalle.html">
                                        Sopa de pollo</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color-a">Rechazar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color-r">Aceptar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="receta para subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin"
                                        href="./detalle.html">
                                        Sopa de pollo</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color-a">Rechazar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color-r">Aceptar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="./imgs/iimg-1.jpg" class="card-img-top mt-3 p-2" alt="receta para subir">
                                <div class="card-body">
                                    <a class="card-title pointer text-decoration-none text-center d-block tittle-cards-admin"
                                        href="./detalle.html">
                                        Sopa de pollo</a>

                                    <!-- <p class="card-text text-center mt-3">corazón</p> -->
                                    <div class="row mt-4">
                                        <div class="col-6"> <button class="button-color-a">Rechazar</button> </div>
                                        <div class="col-6 ps-5"><button class="button-color-r">Aceptar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

</html>