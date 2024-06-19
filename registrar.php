<?php
   include("conexion.php");

   if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['course']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['especialty']) >= 1  
  
      ) {
          $name =trim($_POST['name']);
          $course =trim($_POST['course']);
          $email =trim($_POST['email']);
          $direction =trim($_POST['direction']);
          $phone =trim($_POST['phone']);
          $especialty =trim($_POST['especialty']);
          $fecha =date('d/m/y');
          $consulta ="INSERT INTO datos(nombre, curso, email, direccion, telefono, especialidad, fecha)
               VALUES('$name', '$course', '$email','$direction','$phone', '$especialty', '$fecha')";
          $resultado =mysqli_query($conex, $consulta);
          if ($resultado){
            
            ?>
              <h3 class="success">Tu registro se ha completado</h3>
            <?php
          } else {
            ?>
              <h3 class="error">Ocurrio un error</h3>
            <?php
          }
        } else {
            ?>
              <h3 class="error">Llena todos los campos</h3>
              <?php
       }


    }
   
?>