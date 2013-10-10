<html>
 <head>
 </head>
 
 <body>
   <?php
     $codigo=$_POST['codigo'];
     $contrasenia=$_POST['contrasenia'];
	 
    if(trim($codigo)!=null and trim($contrasenia)!=null)
    {
     if(($codigo=="100" && $contrasenia=="udg") || ($codigo=="110" && $contrasenia=="tonala") || ($codigo="1" && $contrasenia="root"))
     {
	  session_start();
	  $_session['code']=$codigo;
	  $_session['password']=$contrasenia;
      header('Location:Directorio.php');
  	 }
	 else
	 {
	  echo "<h4>Datos Incorrectos</h4>";
	  header('Location:Sesion.php');
	 }
    }
    else
    {
      echo "<h4>Favor de llenar los espacios</h4>";
	  header('Location:Sesion.php');
    }
   ?>
 </body>
</html>