<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Salón</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .thumbnail {
            max-width: 200px;
            max-height: 200px;
            border: 1px solid #ccc;
            margin: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-image-container">
            <div class="rectangle">
                <h1 class="header-title">RENTA DE SALONES DE FIESTAS</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="rectangle">
                <h2>Registrar Salón</h2>
            </div>
            <form action="{ { route('salons.store') } }" method="put">
                <div class="input-field">
                    <input type="text" name="nombre_salon" id="nombre_salon" required>
                    <label for="nombre_salon">Nombre del Salón</label>
                </div>
                <div class="input-field">
                    <input type="text" name="ubicacion" id="ubicacion" required>
                    <label for="ubicacion">Ubicación</label>
                </div>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Subir Imágenes (máx. 4)</span>
                        <input type="file" name="imagenes[]" id="imagenes" accept="image/*" multiple required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Sube hasta 4 imágenes">
                    </div>
                </div>
                <div id="preview"></div>
                <input type="submit" value="Guardar salón" class="btn">
                <a href="" class="btn">Cancelar</a>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>Todos los derechos reservados &copy; 2023 - Renta de Salones de Fiestas</p>
        </div>
    </footer>
    <script>
        document.getElementById("imagenes").addEventListener("change", function(evt) {
            const preview = document.getElementById("preview");
            preview.innerHTML = "";
            const files = evt.target.files;
            for (let i = 0, f; f = files[i]; i++) {
                if (!f.type.match("image.*")) {
                    continue;
                }
                const reader = new FileReader();
                reader.onload = (function(theFile) {
                    return function(e) {
                        const img = document.createElement("img");
                        img.src = e.target.result;
                        img.classList.add("thumbnail");
                        preview.appendChild(img);
                    };
                })(f);
                reader.readAsDataURL(f);
            }
        });
    </script>        
</body>
</html>
