
	  					
    
              <?php

$totalProductos=0;
   //######### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL ########		 
     //######### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL ########		 
      $cliente=new SoapClient(null, array('uri'=>'http://localhost/',
	  					//'location'=>'http://localhost/proweb/1erseg/practica5/servicioweb/servicioweb.php'));	
              'location'=>'http://100.26.22.228/proweb/1erseg/practica5/servicioweb/servicioweb.php'));	
                                     
	  //SE EJECUTA UN MÉTODO DEL SERVICIO WEB, PASANDO SUS PARAMETROS
	  $consulta=$cliente->vwRptArticulos();

	  $totalProductos=5;	//PARA ESTE EJEMPLO SE DEJÓ FIJO MOSTRAR POR RENGLÓN 3 PRODUCTOS
      
?>

<html>
    <head>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <style>
      @media (max-width: 1311px) {

     img{
        width: 150px;
         height: 100px;
    }
  }
     </style>
    </head>     
<body>  

<form name="frmProductos" method="POST">
  <div class="container">
  <table>
  <tr>
    <td colspan="3" style="text-align:left;"><strong>Artículos disponibles:</strong>
      <br><br><br>
  	</td>

    <td colspan="3" style="text-align:right;">
      <a href='?op=bienvenida' title='Regresar al inicio'>Regresar a inicio ...</a>
      <br><br><br>
    </td>
  </tr>
    <?php 
      $i=0;

    for($rr=0;$rr<count($consulta);$rr++){

      if($i==0)
        echo "<tr>";

        echo "<td style='text-align:center;'>"; 
            echo "<a href='?op=rptarticulos'>";
            echo "<img src='".$consulta[$rr]['foto']."' class='img_size' width='250px' height='165px' style='border-radius: 10px;' />";               
            echo "<br><strong>".$consulta[$rr]['nombre']."</strong><br>"; 
            echo "<p class='gray'>$".$consulta[$rr]['precio']."</p>";   		
            echo "</a>";
          echo "</td>";
        $i++;

      //verifica si cierra el renglón e inicializa $i en cero
      if($i==$totalProductos){
        echo "</tr>";
        $i=0;
      }

    } //fin del ciclo for
  ?>
  </table>
  </div>

</form>  
</body>
</html>