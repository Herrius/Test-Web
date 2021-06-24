<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Su cuenta fue creada satisfactoriamente';
    } else {
      $message = 'Lo sentimos no se pudo crear su cuenta';
    }
  }
?>

<!DOCTYPE HTML>    
    <html>    
    <head>    
    <meta utfset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="assets/css/preguntas.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registrarme a Yachayqay Test</title>
    



    </head>    
    <body >
    <div class="body">
        <div class="container">
            <header class="img">
                <img src="assets/css/UC-Horizontal-White 1.png">
            </header>
  
            <form class="conti" method="post" >

            <h1> Yachayqay Test </h1>


            <?php if(!empty($message)): ?>
              <p> <?= $message ?></p>
            <?php endif; ?>

            <h2>Registrarme</h2>
            <span>o <a href="login.php">Iniciar Sesion</a></span>

            <form action="signup.php" method="POST">
              <input name="email" type="text" placeholder="Registre su Email" maxlength="27">
              <input name="password" type="password" placeholder="Ingrese su contraseña">
              <input type="submit" value="Registrarme">
            </form>

   
            </form>
          
            </div>
        </div>
    </div>
</body>

</html>












