<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renta de Salones de Fiestas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <header>
        <div class="header-image-container">
            <div class="rectangle">
                <h1 class="header-title">RENTA DE SALONES DE FIESTAS</h1>
            </div>
        </div>
    </header>

    <nav>
        <div class="nav-wrapper">
            <ul>
                <li><a href="salones.php">Salones</a></li>
                <li><a href="{{ route('salons.create') }}">Registrar Salón</a></li>
                <!-- <li><a href="agendar_evento.html">Agendar Evento</a></li> -->
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <!-- Contenido principal -->
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>Todos los derechos reservados &copy; 2023 - Renta de Salones de Fiestas</p>
        </div>
    </footer>
</body>
</html>
