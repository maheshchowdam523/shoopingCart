<?php 

	if(isset($_POST['submit'])){
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0){
				unset($_SESSION['cart'] [$key]);
			}
			else{
				$_SESSION['cart'] [$key]['quantity']=$val;
			}
		}
	}
?>

<div id="hello"><center>
	<h2>List of Items on cart</h2>	
	<p>To remove an Item from cart, set its Quantity to 'Zero'</p>		
	<form method="post" action="biotech.php?page=cart1">
	<table style="width:700px;">
	<tr align="center" style="background:#239922">
		<td style="color:#fff">Name</td>
		<td style="color:#fff">Quantity</td>
		<td style="color:#fff">Price</td>
		<td style="color:#fff">Items Price</td>
	</tr>
		<?php 
		$sql= "select * from products WHERE id_product IN (";
				 foreach($_SESSION['cart'] as $id => $value){
					$sql.=$id.",";
				 } 
				 $sql=substr($sql, 0 , -1).") ORDER BY name ASC ";
				 $query=mysql_query($sql);
				 if(!$query){
					header("Location:nocart.php");
					die();
					}
					
				 $totalprice=0;
				 while($row = mysql_fetch_array($query)){
				  	$subtotal=$_SESSION['cart'] [$row['id_product']] ['quantity']*$row['price'];
					$totalprice+=$subtotal;
				 	?>
					<tr>
					<td><?php echo $row['name'] ?></td>
					<td> <input type="text" name="quantity[<?php echo $row['id_product']?>]" size="4" value="<?php echo $_SESSION['cart'] [$row['id_product']] ['quantity'] ?>"/> </td>
					<td>$ <?php echo $row['price'] ?></td>
					<td>$ <?php echo $_SESSION['cart'] [$row['id_product']] ['quantity']*$row['price'] ?></td>
					</tr>
					
					<?php
				 }
		?>		
		
	
	
	
		
	</tr>
<tr>
	<td></td><td></td>
	<td>Total price :</td>
	<td>$ <b style="color:crimson"><?php echo $totalprice ?></b></td>
</tr>

</table>
<br/>
<button type="submit" name="submit">Update Cart</button>
	</form>

</center></div>

