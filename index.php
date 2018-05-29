<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="Icon" type="image/x-icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>METZONALI</title>
</head>

<link rel="stylesheet" type="text/css" href="css/css1.css">

<body>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>

<?php

if($_SESSION['access']=='Salesperson'){
	header('location:sales1.php');
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
          	<th scope="col">
			<?php
			
			include_once("date1.php"); //$Today = date('y:m:d',time());
			//$new = date('l, F d, Y', strtotime($Today));
			//echo $new;
			?></th>
          	<th scope="col" width="20px"><a href="logout.php">
            <input type="button" id="btnadd" value="Cerrar Sesión" align="middle" src="" />
          	</a></th>
        </tr>
  </table></td>
    </tr>

</table>
</div>

<br><br><br><br><br>
<!-- Footer -->
<div id = "headnav"> 
<?php include ('menu_nav.php')
?>
<!--
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>

  	<td width="1053" height="62">
  	<table width="669" border="0" cellspacing="0" cellpadding="0">
  	  <tr>
  	    <th width="90" height="62" scope="col"><a href="index.php">Menú</a></th>
  	    <th width="50" scope="col"><a href="sales.php">Ventas</a></th>
  	    <th width="80" scope="col"><a href="products.php">Productos</a></th>
  	    <th width="90" scope="col"><a href="customers.php">Clientes</a></th>
  	    <th width="90" scope="col"><a href="supplier.php">Proveedor</a></th>
  	    <th width="112" scope="col"><a href="salesreport.php">Reporte de Ventas</a></th>
  	    </tr>
  	  </table>
        </td>
        
        <td width="13">
        <table border="0" cellspacing="0" cellpadding="0">
        	<tr>
          	<td align="left" style="color:#FFF">
              <?php
  			$date_time=date("h:i:sa");
  			echo $date_time;
  			?>
              </td>
          </tr>
        </table>
        </td>

  </tr>
  </table>
-->
</div>
<br><br><br><br>
<div id="bdcontainer">
<?php
include 'menu_index.php';
?>
<!--
  <table border="0" cellpadding="0" cellspacing="10" align="center">
  	<tr>
      	<td><a href="sales.php"><input type="button" id="bdnav1"></a></td>
          <td><a href="products.php"><input type="button" id="bdnav2"></a></td>
          <td><a href="customers.php"><input type="button" id="bdnav3"></a></td>
      </tr>
      <tr>
      	<td><a href="supplier.php"><input type="button" id="bdnav4"></a></td>
          <td><a href="salesreport.php"><input type="button" id="bdnav5"></a></td>
          <td><a href="logout.php"><input type="button" id="bdnav6"></a></td>
      </tr>
  </table>
-->
</div>

<div id="footer">
<?php
include 'footer.php';
?>
</div>

</div>

</body>
</html>
