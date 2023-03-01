<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Aplicativo</title>
</head>

<body>

    <?php require 'partials/header.php' ?>
    <div>
        <img src="assets/img/espe.png" alt="espe">
    </div>
    <br>
    <div>
        <br>
        <div>
            <a class="btn btn-primary btn-lg " href="login.php" role="button">Acceder como Usuario</a>
        </div>
        <br>
        <div>
            <a class="btn btn-secondary btn-lg" href="signup.php" role="button">Registra tu Usuario</a>
        </div>
    </div>
</body>

</html>