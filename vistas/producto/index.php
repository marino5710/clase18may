<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>APP DE TIENDA</title>
</head>
<body>
    <div class="container justify-content-center">
        <h1 class="text-center">FORMULARIO DE PRODUCTOS</h1>
        <div class="row justify-content-center">
            <form action="/CLASE18MAY/controladores/productos/guardar.php" method="$_POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_nombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control"  name="producto_nombre" id="producto_nombre" placeholder="Nombre del producto">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_precio" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" name="producto_precio" id="producto_precio"  placeholder="Precio del producto">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>