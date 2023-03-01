<?php
require 'database.php';
if (isset($_SESSION['user_id'])) {
  header('Location: /aplicativo');
}
if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $message = '';
  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header('Location: /aplicativo/pag.php');
  } else {
    $message = 'Lo siento este usuario no es correcto';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity ="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title>Ingreso</title>
</head>

<body>
  <?php require 'partials/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p><strong><em><?= $message ?></em> </strong></p>
  <?php endif; ?>
  <h1>Accede con tu usuario</h1>
  <span>o tambien puedes <a href="signup.php">Registrarte</a></span>
  <form action="login.php" method="post">
    <input type="text" name="email" placeholder="Ingresa tu Email">
    <input type="password" name="password" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Acceder">
  </form>
</body>

</html>
