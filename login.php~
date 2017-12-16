<?php
session_start();
$message="";
if(isset($_POST['save'])) {
$con =mysqli_connect("localhost","root","mahi1506","store");
$result = mysqli_query($con,"SELECT *
        FROM user
        WHERE email='" . $_POST["email"] . "' and password= '". $_POST["pass"]."'") ;
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["fname"] = $row["fname"];
} 
else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["fname"])) {
header("Location:aindex.php");
}
?>


<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">
		<title> Sign in </title>
	</head>
	<body>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="container">
		<div id="head-nav">		
			<div id="header">
				<p> Online Book Store</p>		
			</div>
			<div id="sign">
				<p>  <a href="reg.php">Sign Up</a></p>
			</div>
			<div id="nav">
				<ul>
					<a href="index.php"><li> Home </li></a>
					<a href="about_us.php"><li> About Us</li> </a>
					<a href="collection.php"><li> Collections</li> </a>
					<a href="contactus.php"><li> Contact Us</li> </a>
					<a href="cart0.php?page=cart1"><li> Cart </li> </a>
				</ul>		
			</div>
		</div>
		<div id="container-body">
			<div id="image">
			<img src="images/wb.jpg">
			</img>
			</div>
		</div>	
			<div id="lft">
				<ul>
					<a href="biotech.php"><li> Bio-Tech </li> </a>
					<a href="computers.php"><li> Computers </li></a>	
					<a href="electrical.php"><li> Electrical </li></a>
					<a href="electronic.php"><li> Electronics </li>	</a>	
				</ul>
			</div>
			<div id="content">
				<center>
					<h2 align="center"> Login </h2><br/>
					<form action="" method="post" >
					<i>	<?php if($message!="") { echo $message; } ?></i>
            	<table>
              		<tr>
                		<td> UserID: </td>
                 		<td><input name="email" type="text" placeholder="UserID" autofocus required autofill="off" /></td>
						</tr>
                	<tr> 
							<td> Password:</td>
                  	<td><input name="pass" type="password" placeholder="Password" required /></td>
                 	</tr>
						<tr>				 	
				 		<td></td><td align="center">
							<input class="but" type="submit" name="save" value="Submit"/>
	                	<input class="but" type="reset" name="Reset" value="Reset"/></td>
               	</tr> 
			   	</table>
			   	</form>	
           </center>
		</div>
		<div id="contact">
			<p> Follow  us </p>
			<a href="" ><img src="images/f.png"	>facebook/OnlineBookStore </img></a><br>
			<a href="" ><img src="images/g.png">#OnlineBookStore </img></a><br>
			<a href="" ><img src="images/p.png">OnlineBookStore</img></a><br>
			<a href="" ><img src="images/t2.png">@OnlineBookStore </img></a>
		</div>
		<div id="footer"> 
			<p> &copy; 2014, Mahesh, Jasan</p>		
		</div>
		</div>	
	</div>
	
	</body>
</html>
