<?php
require_once('config/config.php');
$ID = $_GET ['ID'];
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
                <h1>Gastos categoria <a href="index.php" class="btn btn-dark">regresar</a></h1>
             </div>
         </div>
         <form action="config/update_spending.php" method="POST">
        <div class="row mt-5">
            
            <div class= "col-6">
                    
                </select>
               </div>
               <div class= "col mt-3">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" ID="nombre" value="<?php echo $record['nombre'];?>">
               </div>
               <div class="col mt-3">
               <input type="hidden" name="ID" value="<?php echo $ID; ?>">
                <button type="submit" class="btn btn-success">guardar</button>
            </div>
        </div>
        </form>
     </div>
</body>
</html>