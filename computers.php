<?php
session_start();
require("includes/connection.php");
if(isset($_GET['page'])){
	$pages=array("productscse","cart1");
	if(in_array($_GET['page'],$pages)){
		$_page=$_GET['page'];
	}
	else{
		$_page="productscse";
	}
}
else{
	$_page="productscse";
}
?>

<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">
		<title> Computers</title>
	</head>
	<body>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="container">
		<div id="head-nav">		
			<div id="header">
				<p> Online Book Store</p>		
			</div>
			<div id="sign">
				<?php if(isset($_SESSION['fname'])){
					?><p> Welcome<?php echo $_SESSION['fname']?> <a href="logout.php"> Logout</a></p>
					<?php
				}
				else{
					?>
					<p><a href="login.php">Login</a> &nbsp; <a href="reg.php" > Sign Up</a></p>
				<?php }
			?>
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
			<img src="images/cse1.jpg" height="310px">	</img>
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
				<?php	require($_page.".php"); ?>
		 	</div>
		</div>
		<div id="right">
			<img src="images/cse.jpg" style="height:600px;width:280px" ></img>	
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
