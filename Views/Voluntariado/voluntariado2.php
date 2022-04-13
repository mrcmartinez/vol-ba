<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <div class="logo">
                <h1>Vol-Ba</h1>
            </div>
            <nav class="menu">
                <a href="#">Voluntariado</a>
                <a href="#">Cursos</a>
                <a href="#">Tickets</a>
                <a href="#">Reportes</a>
            </nav>
        </div>
    </header>
    <div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="#">Usuarios</a>
                <a href="#">Configuracion</a>
                <a href="#">Cerrar sesion</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <!-- tag -->
    <div class="container-lbl-menu">
        <div class="lbl-menu">
            <label for="radio1">Voluntariado</label>
            <label for="radio2">Servicio Social</label>
            <label for="radio3">Home</label>
        </div>

        <div class="content">

            <input type="radio" name="radio" id="radio1" checked>
            <div class="tab1">
                <!-- <h2>Inicio</h2>
                <button>Hola</button> -->
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis similique, expedita officiis
                    enim
                    iusto alias autem doloribus deleniti. Alias mollitia inventore neque dicta fuga, quos quis,
                    facere
                    at quae, laudantium est asperiores illo nulla nisi iure eum, aperiam facilis in.</p> -->

                <!-- <button type="button" class="btn btn-primary">Nuevo</button> -->
                <!-- <div class="bg-primary">Hola</div> -->
                <!-- <div class="col-md-12"> -->
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Turno</th>
                                <th>Estatus</th>
                                <th>Documentacion</th>
                                <th>Acciones</th>
                            </tr>
                            <td>001</td>
                            <td>Mauricio martinez Aguilar</td>
                            <td>Lunes</td>
                            <td>Activo</td>
                            <td>Pendiente</td>
                            <td>Update</td>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                <!-- </div> -->

            </div>
            <input type="radio" name="radio" id="radio2">
            <div class="tab2">
                <h2>Servicios</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis similique, expedita officiis
                    enim
                    iusto alias autem doloribus deleniti. Alias mollitia inventore neque dicta fuga, quos quis,
                    facere
                    at quae, laudantium est asperiores illo nulla nisi iure eum, aperiam facilis in.</p>
            </div>
            <input type="radio" name="radio" id="radio3">
            <div class="tab3">
                <h2>Home</h2>
                <button>Hola</button>
            </div>

        </div>
    </div>
</body>

</html>