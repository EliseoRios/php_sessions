<html>
 <head>
  <title>Sesion</title>
  <link href="CSSNuevo.css" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <form method="post">
  
   </p>C&oacutedigo</p>
   <input type="text" name="codigo">
   <p>Contrase&ntildea</p>
   <input type="password" name="contrasenia">
   <br/>
   <input type="submit" name="entrar" value="Entrar"/>
   
   <?php
   $codigo=$_POST['codigo'];
   $contrasenia=$_POST['contrasenia'];
   
    if(trim($codigo)!=null and trim($contrasenia)!=null)
    {
     if(($codigo=="100" && $contrasenia=="udg") || ($codigo=="110" && $contrasenia=="tonala"))
     {
	  session_start();
	  $_session['code']=$codigo;
	  $_session['password']=$contrasenia;
      header('Location:Directorio.php');
  	 }
	 else
	 {
	  echo "<h4>Datos Incorrectos</h4>";
	 }
    }
    else
    {
      echo "<h4>Favor de llenar los espacios</h4>";
    }
   ?>
  </form>
 </body>
</html>