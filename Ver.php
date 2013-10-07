<html>
 <head>
  <title>Ver</title>
  <link href="CSSNuevo.css" rel="stylesheet" type="text/css"/>
 </head>
 
  <body>
   <a href="Sesion.php">
    <button>
	<form>
	 </form>
     <img src="apagar.png" width="300" height="70"/>
    </button>
   </a>
  <br/>
  
  <h2>DATOS REGISTRADOS</h2>
  <form>
  <?php
   $nombre=$_POST['nombre'];
   $telefono=$_POST['telefono'];
   $celular=$_POST['celular'];
   $domicilio=$_POST['domicilio'];
   
   echo "   Nombre: ".$nombre."</br>";
   echo "Tel&eacutefono: ".$telefono."</br>";
   echo "Celular:  ".$celular."</br>";
   echo "Domicilio: ".$domicilio."</br>"
   
  ?>
  </form>
  </body>
<!--form method="post" action "archivo_abrir.php"-->
</html>