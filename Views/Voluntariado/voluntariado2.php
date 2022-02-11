<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Assets/css/styles.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">

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
        </div>

        <div class="content">

            <input type="radio" name="radio" id="radio1" checked>
            <div class="tab1">
                <button type="button" class="btn btn-primary">Nuevo</button>
                <div class="bg-primary">Hola</div>
                <!-- <div class="container"> -->
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Identificación</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>
                        <tbody>
                            ...
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
        </div>
    </div>
</body>

</html>