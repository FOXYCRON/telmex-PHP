<html>
  <head> 
      <title> Telmex </title>
  </head>
   <body background = "imagenes/telmex.jpg">

   <form method = "post" action = "telmex2.php">
	<br>
         <font color = white> <h1 align = center> TELMEX </h1> </font>
	<br>

      <h4 align = center> <b> Ingrese Nombre: </b>
         <input type="text" name="nom"> </h4>
      <h4 align = center> <b> Ingrese Apellido: </b>
         <input type="text" name="apell"> </h4>



             <font color = white>  <h3 align = center> Seleccione los servicios que quiere contratar: </h3> </font>

         <center> <input type="checkbox" name="check1" value="telefono"> <b> Servicio de Telefono. </b> </center>

         <center> <input type="checkbox" name="check2" value="internet"> <b> Servicio de Internet. </b> </center> 

      <br>
      <br>

         <center> <input type = "submit" value = "Enviar";> </center>
     </form>

   </body>
</html>