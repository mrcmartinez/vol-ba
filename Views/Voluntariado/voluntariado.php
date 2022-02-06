<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?= media(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?= media(); ?>/css/fontello.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu" class="icon-menu"></label>
            </div>
            <div class="logo">
                <h1>Vol-Ba-Zor</h1>
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
            <label for="btn-menu" class="icon-equis">X</label>
        </div>
    </div>
</body>
</html>