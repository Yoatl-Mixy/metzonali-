<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="Icon" type="image/x-icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inmuebles - Metzonali</title>
</head>

<link rel="stylesheet" type="text/css" href="css/css1.css">
<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

<body>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>

<div id="container">
<div id="header">
<table cellspacing="0" width="100%" border="0" cellpadding="20px">
<tr>
	<td width="56%">
    <table width="41%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td width="80%" align="left"> <font size="12px">M</font><span style="font-size: 18px;">etzonali</span></td>
	    </tr>
	  </table></td>
    <td style="font-size:14px;">
      <table width="93%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        	<th scope="col">Bienvenido: <?php echo $_SESSION['access'];?></th>
          	<th scope="col"><?php
			include_once("date1.php"); //$Today = date('y:m:d',time());
			//$new = date('l, F d, Y', strtotime($Today));
			//echo $new;
			?></th>
          	<th scope="col" width="20px"><a href="logout.php">
            <input type="button" id="btnadd" value="Cerrar Sesión" align="middle" />
          	</a></th>
        </tr>
  </table></td>
    </tr>

</table>
</div>

<br><br><br><br><br>
<!-- Footer -->
<div id = "headnav"> 
<?php
include 'menu_nav.php';
?>
</div>
<br>

<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="750" align="right">
        
        <form action="result_customer.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Buscar Inmueble..." /><input type="submit" id="btnsearch" value="Buscar" name="search" />
        </form>
        
        </td>
        
        <td width="127" height="37" align="right">
        <a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><input type="button" style="border:1px solid #999; background: #999; height:45px; width:125px; color:#FFF; border-radius:3px; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;" value="+ Agregar Inmueble" /></a></td>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #999; color:#033;">
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background: #999; color:#FFF;"> Tabla - Informacion del Inmueble</th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> Nombre </th>
        <th style="border-bottom:1px solid #333;"> Contacto </th>
        <th style="border-bottom:1px solid #333;"> Direccion </th>
        <th style="border-bottom:1px solid #333;"> Notas </th>
        <th style="border-bottom:1px solid #333;"> Accion </th>
      </tr>
      
        <!-- Search goes here! -->
 

  
  		<!-- Search end here -->
      
       <?php
require('config.php');
$query="SELECT * FROM customers";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:25px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['name']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['contact']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['address']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['note']; ?> </td>
        <td style="border-bottom:1px solid #333;">
        
<a href="delete_customer.php?id=<?php echo md5($row['id']);?>"><input type="button" value="Eliminar" style="width:15; height:20; color:#FFF; background: #900; border:1px solid #900; border-radius:3px;"></a>
        
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>
<br><br><br>
<div id="bdcontainer"></div>

<div id="footer">
<?php
include 'footer.php';
?>
</div>

</div>

<div id=popout>
<?php
include 'popout_inmuebles.php';
?>
</div>

</body>
</html>
