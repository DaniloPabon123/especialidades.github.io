<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <form method="post">
        <p>.</p>
         <h2>Bienvenido a nuestro registro</h2>
        <p>Ingresa tus datos</p>

        <div class="imput-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="">

        </div>
        <div class="imput-wrapper">
            <input type="text" name="course" placeholder="Curso">
            <img class="input-icon" src="images/name.svg" alt="">

        </div>
        <div class="imput-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/email.svg" alt="">

        </div>
        <div class="imput-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon" src="images/direction.svg" alt="">

        </div>
        <div class="imput-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="images/phone.svg" alt="">

        </div>
        <div class="imput-wrapper">
            <input type="text" name="especialty" placeholder="Especialidad">
            <img class="input-icon" src="images/name.svg" alt="">

        </div>
        
            <input class="btn" type="submit" name="register" value="Enviar">
     </form>
     <?php
        include("registrar.php");
     ?>
    
    <a href="index2.php" class="boton-redireccion">Menú </a>


</body>
</html>