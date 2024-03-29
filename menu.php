<?php
require_once 'usuarios/config/validate_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <h1>base de datos</h1>
        <li class="btn btn-secondary">
          <a class="nav-link" href="gastos/index.php">gastos</a>
        </li>
        <li class="btn btn-info">
          <a class="nav-link" href="gastos_categoria/index.php">gastos_categoria</a>
        </li>
        <li class="btn btn-secondary">
          <a class="nav-link" href="tabla_usuarios/index.php">usuarios</a>
        </li>
      </ul> 
      <span class="navbar-text">
        Andrik Adrian Mas Tamayo
      </span>
    </div>
  </div>
</nav>
  
</head>
<body>

<?php include 'session_paragraph.php' ?>
</body>
</html>