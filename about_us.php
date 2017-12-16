<?php
session_start();
?>
<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">		
		<title> About Us </title>
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
			<img src="images/wb.jpg"><p> Vision<br><font face="Segoe UI Light" size="4px">The failure to read good books both enfeebles the vision and strengthens our most fatal tendency <br>-- the belief that the here and now is all there is.</p> </p>
			</img>
			</div>
		</div>	
			<div id="lft">
				<ul>
					<a href="biotech.php"><li> Bio-Tech </li> </a>
					<a href="computers.php"><li> Computers </li></a>	
					<a href="electrical.php"><li> Electrical </li></a>
					<a href="electronics.php"><li> Electronics </li>	</a>	
				</ul>
			</div>
			<div id="content">
				<p> &nbsp;&nbsp;&nbsp;&nbsp; We want to provide our customers with a great shopping experience, which is why we designed the Bookstore with several new features. Our store includes an event space for author readings and community events, a Kid's Corner for families and young readers to lounge and browse books. With so many exciting features to offer, we hope you will enjoy shopping at the Online bookstore!
		</p>
		<img src="images/v1.jpg" alt="Vision meaning"> </img>
		<img src="images/v4.jpg" > </img>
		<p> &nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;The Bookstore carries textbooks, general trade books, school supplies, stationery and NYU clothing and gifts. The NYU Computer Store carries computer hardware, software, accessories and iPods at exclusive NYU discounts. </p>
		<img src="images/v.jpg" alt="" ></img>
		</div>
		<div id="right">
			<img src="images/v3.jpg" alt="vision" ></img>	
			<p> &nbsp;&nbsp;&nbsp;&nbsp;<b>Social</b>: Our mission is to provide NYU students, faculty, staff and administrators with the resources and tools necessary to achieve academic excellence. 
		</p>	
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
