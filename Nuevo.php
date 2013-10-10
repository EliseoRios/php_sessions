<html>
 <head>
  <title>Nuevo</title>
  <link href="CSSNuevo.css" rel="stylesheet" type="text/css"/>
 </head>
 
 <body>
  <a href="Sesion.php">
  <button>
   <img src="apagar.png" width="300" height="70"/>
  </button>
 </a>
  <br/>
  
  <h2>INSERTAR DATOS</h2>
  <form method="POST" action="Ver.php">
   <label>Nombre:</label><input type="text" name="nombre"/></br>
   <label>Telefono:</label><input type="text" name="telefono"/></br>
   <label>Celular:</label><input type="text" name="celular"/></br>
   <label>Domicilio:</label><input type="text" name="domicilio"/></br>
   <input type="submit" name="enviar" value="Enviar"/>
   </form>
 </body>
</html>