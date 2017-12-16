<?php
	session_start();
?>
<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">
		<title> Collections </title>
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
			<img src="images/wb.jpg"><p> Collection <br><font face="Segoe UI Light" size="4px">Consisting the collection of books, including seeking, locating, acquiring, organizing, cataloging,<br> displaying, storing, and maintaining whatever books are of interest to a given individual collector.</p> </p>
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
			<div id="contactus">
			<ul class="works">
		 		<a href=""><p style="font-size:35px;color:#3355ff">Novels</p><li><img src="images/book.jpg" style="padding-left:10px;height:200px;width:370px"></img></li></a>
		 		<a href=""><p style="font-size:35px;color:#3355ff">Education</p><li><img src="images/book_store.jpg" style="padding-left:10px;height:220px;width:370px"></img></li></a>
		 	</ul>
		</div>
		<div id="right">
			<ul class="works">
			<a href="" ><p style="font-size:35px;color:#3355ff">Cooking Books</p><li><img src="images/cook.jpg" style="padding-left:10px;height:200px;width:370px" ></img></a>
			<a href="" ><p style="font-size:35px;color:#3355ff">Fantasy Books</p><li><img src="images/aya2.png" style="padding-left:10px;height:200px;width:370px" ></img></a>
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
