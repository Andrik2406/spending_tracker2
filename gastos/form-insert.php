<?php
require_once('config/config.php');
$query = "SELECT * FROM gastos_categoria";
$result = $conexion->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row mt-5">
            <div class="col">
                <h1>Gastos <a href="index.php" class="btn btn-dark">regresar</a></h1>
             </div>
         </div>
         <form action="config/insert_spending.php" method="POST">
        <div class="row mt-5">
            <div class="col-6">
             <label for="Cantidad" class="form-label">Cantidad</label>
             <input type="text" class="form-control" name="Cantidad" ID="Cantidad"> 
            </div>
            <div class= "col-6">
                <label for="Categoria" class="form-label">categoria</label>
                <select class="form-select" name="Categoria" ID="Categoria">
                    <option value="0" selected>seleccione tu opcion</option>
                    <?php
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['ID']; ?>"><?php echo $row['nombre'];?></option>
                    <?php } ?>
                </select>
               </div>
               <div class= "col mt-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" ID="descripcion">
               </div>
               <div class="col mt-3">
                <button type="" class="btn btn-success">guardar</button>
            </div>
        </div>
        </form>
     </div>
</body>
</html>