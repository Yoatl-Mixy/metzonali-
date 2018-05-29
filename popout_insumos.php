<div id="popup-box1" class="popup-position">
  <div id="popup-wrapper">
  <div id="popup-container">
      <div id="popup-head-color1">
      <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
      <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Agregar Insumo </p>
      </div>
      <br>
      <form action="add_item.php" method="POST">
      <table border="0" align="center">
      
      <tr>
      <td align="right">Categoria:</td>
      <td>
      <select name="category" id="txtbox">
      <option> Lacteos</option>
      <option> Verduras </option>
      <option> Carnes</option>
      <option> Salchichoneria </option>
      <option>Bebidas</option>
      <option>Condimentos</option>
      <option>Desechables</option>
      <option>Otros</option>
      </select>
      </td>
      </tr>
      
      <tr>
      <td align="right">Nombre:</td>
      <td><input type="text" id="txtbox" name="name" placeholder="Nombre" required><br></td>
      </tr>
      
      <tr>
      <td align="right">Cantidad:</td>
      <td><input type="text" id="txtbox" min="1" name="quantity" maxlength="11" placeholder="Cantidad" required><br></td>
      </tr>
      
      <tr>
      <td align="right">Precio de Compra:</td>
      <td><input type="text" id="txtbox" name="purchase" maxlength="11" placeholder="Precio" required><br></td>
      </tr>
      
      <tr>
      <td align="right">Precio de Venta:</td>
      <td><input type="text" id="txtbox" name="retail" maxlength="11" placeholder="Venta" required><br></td>
      </tr>
      
      <tr>
      <td align="right">Proveedor:</td>
      <td>
      <select name="supplier" id="txtbox">
      <?php
  	$query="SELECT * FROM supplier";
  	$result=mysqli_query($db_link, $query);
  	while ($row=mysqli_fetch_array($result)){?>
      
  	<option><?php echo $row['suppliername']; ?></option>
      					
  	<?php
  }?>
  	</select>
  </td>
      </tr>
      
      <br>
      <tr  align="left">
      <td>&nbsp;  </td>
      <td><input type="SUBMIT" id="btnnav" value="Enviar"></a></td>
      </tr>
      
      </table>
      </form>

  </div>
  </div>
</div>