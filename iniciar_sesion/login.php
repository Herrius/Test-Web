
<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
      header('Location: /php-login');
    }
    require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $records = $conn->prepare('SELECT  email, password FROM users WHERE email = :email');
      $records->bindParam(':email', $_POST['email']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);

      $message = ' ';

      if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $email=$_POST['email'];
        header("Location: /fetch.php?idpregunta=1&codigo=$email");
      } else {
        $message = 'Lo sentimos ingreso mal la contraseña';
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
    <title>Inicio Sesión Yachayqay Test</title>

   
  
    </head>    
    <body >
    <div class="body">
        <div class="contenedor">
            <header class="img">
               <img src="assets/css/UC-Horizontal-White 1.png">
            </header>

  
  
            <form class="conti" method="post" >
            
            <h1> Yachayqay Test </h1>

            <?php if(!empty($message)): ?>
                <p> <?= $message ?></p>
              <?php endif; ?>

              <h2>Iniciar Sesion</h2>
              <span>o <a href="signup.php">Resgistrame</a></span>

              <form action="login.php" method="POST">
                <input name="email" type="text" placeholder="Ingrese su Email" maxlength="27"> 
                <input name="password" type="password" placeholder="Ingrese su contraseña">
                <input type="submit" value="Iniciar">
   
            </form>
          
            </div>
        </div>
    </div>
</body>

</html>