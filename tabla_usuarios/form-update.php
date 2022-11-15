<?php 
    require_once('config/config.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios_status";
    $result = $conexion->query($query);

    $query2 = "SELECT * FROM usuarios WHERE id = $id";
    $result2 = $conexion->query($query2);
    $record = $result2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>usuarios <a href="index.php" class= "btn btn-dark">regresar</a></h1>
            </div>
        </div>
        <form action="config/update_spending.php" method="POST">
            <div class="row mt-5">
                <div class="col-6">
                    <label for="nombre"class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $record['nombre']; ?>">
                </div>
                <div class="col-6 mb-3">
                    <label for="status"class="form-label">status</label>
                    <select class="form-select" name="status" id="status">
                        <?php 
                        while($row = $result->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="correo"class="form-label">correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $record['correo']; ?>">
                </div>
                <div class="col-12 mb-3">
                    <label for="password"class="form-label">password</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?php echo $record['password']; ?>">
                </div>
                <div class="col-12 mb-3">
                    <label for="telefono"class="form-label">telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $record['telefono']; ?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-success">guardar</button>
                </div>
            </div>
        </form>
    </div>