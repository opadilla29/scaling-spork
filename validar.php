<?php
      $nombre = $_POST['nombre'];
      $pass = $_POST['pass'];
      //$conexion=mysqli_connect("localhost","root","Danny16029567*","siac");
      include "conexion.php";
      $consulta="SELECT * FROM usuario where nombre='$nombre' and pass='$pass'";
      $resultado=mysqli_query($conexion,$consulta);
      $filas=mysqli_num_rows($resultado);

 
      if ($filas>0){

            echo "BIENVENIDO AL SISTEMA";
          header ("location:../principal-eliminar-registro.php?=3");
      }

      else {
        header ("location:../error-usuario.php?usu=4");

        //echo  "error-usuario.php";
      }

      mysqli_free_result($resultado);
      mysqli_close($conexion);
?>


