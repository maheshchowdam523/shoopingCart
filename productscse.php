<?php

if(isset($_GET['action']) && ($_GET ['action']== "add" ))
{
	if(isset($_SESSION['fname']))
	{
		$id= intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
		 echo "<SCRIPT LANGUAGE='JavaScript'>
 			 alert('Item Added to cart Successfully, Click OK Continue Shopping.. ');
        	
         </SCRIPT>";
	}else{
		
		$sql_s="select * from products where id_product={$id}";
		$query_s = mysql_query($sql_s);
		if(mysql_num_rows($query_s)!=0){
		
			$row_s=mysql_fetch_array($query_s);
			$_SESSION['cart'] [$row_s['id_product']]=array(
				"quantity" => 1,
				"price" => $row_s['price']
			
			);
			
			 echo "<SCRIPT LANGUAGE='JavaScript'>
 			 alert('Item Added to cart Successfully, Click OK Continue Shopping.. ');
        	
         </SCRIPT>";
			
		}else
		{
			$message="This product is invalid";
		}
		
	}
	}
	else
	{
	
		header("Location:login.php");
	}
}
?>
<div id="hello"><center>
	<h2>Computers Catalogue</h2>
	<?php
	if(isset($message))
	{
		echo "<h3>$message</h3>";
	}
	
	
	?>
	
		
		<table style="width:700px;">
		<tr  align="center">
		<td>Cover</td>
		<td >Name</td>
		<td >Description</td>
		<td >Price</td>
		<td >Remarks</td>
		</tr>
	<tr>
		<?php 
			$sql= "select * from products where cat='cse' ORDER BY name ASC";
			$query= mysql_query($sql);
			while($row=mysql_fetch_array($query))
			{
			?>
			
			<tr>
				<td><img src="images/cse/<?php echo $row['id_product']?>.jpg " style="height:55px;width:40px;"></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['description'] ?></td>
				<td>$ <?php echo $row['price'] ?></td>
				<td><a href="computers.php?page=productscse&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td>		
			</tr>
		<?php		
			}
		?>
	
	
		
	</tr>


</table>
</center></div>
