<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body class="text-center">
    <main class="form-signin">
        <form action="config/recovery.php" method="POST">
      <h1>Denxy</h1>
      <h2 class="h3 mb-4 font-weight-normal">Porfavor escriba su contraseña</h1>
      <label for="inputEmail" class="sr-only">correo electronico</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="correo electronico"  name="email">
      
      <button class="btn btn-lg btn-primary" type="submit">recuperar contraseña</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2022</p>

    
    </form>
    </main>
  </body>
</html>