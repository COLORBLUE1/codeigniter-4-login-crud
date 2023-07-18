
<?php 

    $id = $datos[0]['id'];
    $nombre = $datos[0]['name'];
    $apellido = $datos[0]['apellido'];
    $email = $datos[0]['email']; 
    $contraseña = $datos[0]['contraseña']; 
    $telefono = $datos[0]['telefono']; 
    $direccion = $datos[0]['direccion']; 
 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
</head>
<body>

<div class="container">
        <h1>CRUD</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                <input type="text" name="id" id="id" hidden="" value="<?php echo $id ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $apellido ?>">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
                    <label for="clave">contraseña</label>
                    <input type="text" name="clave" id="clave" class="form-control" value="<?php echo $contraseña ?>">
                    <label for="email">telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono?>">
                    <label for="email">direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $direccion?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
            <div class="table table-responsive">    
            <table class="table table-hover-bordered">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>