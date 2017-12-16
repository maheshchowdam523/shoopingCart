<?php
	session_start();
?>
<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">
		<title> Home </title>
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
				<img src="images/bookstore_0.png" ></img><p> Online Book Store</p>		
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
					<a href="aindex.php"><li> Home </li></a>
					<a href="about_us.php"><li> About Us</li> </a>
					<a href="collection.php"><li> Collections</li> </a>
					<a href="contactus.php"><li> Contact Us</li> </a>
					<a href="cart0.php?page=cart1"><li> Cart </li> </a>
				</ul>		
			</div>
		</div>
		<div id="container-body">
			<div id="image">
			<img src="images/wb.jpg"><p> Home<br><font face="Segoe UI Light" size="4px">A good book on your shelf is a friend that turns its back on you and remains a friend.</p> </p>
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
			<?php
			if(isset($_SESSION['fname'])){
			?>
			<p style="color:#239922"><marquee>You are logged in as <i style="color:red"><?php echo $_SESSION['fname']?></i>  </marquee></p>
			<?php
			}
			else{
			?>
			<p style="color:#239922"><marquee>You have successfully logged out...!!  </marquee></p>
			<?php }
			?>
				<p> &nbsp;&nbsp;&nbsp;&nbsp;Better World Books is among a unique and growing group of triple bottom line companies who understand that profit is not the only way to measure business success. People also matter. And so does the planet on which we all live.
For Better World Books, the triple bottom line comes in lots of forms. From helping to build a nursing library in Somaliland to offering customers carbon neutral shipping on every book they buy, doing good is not just a part of Better World Books business it is the business.
		</p>
		<img src="images/book.jpg" alt="Books"> </img>
		<img src="images/a.jpg"></img>
		<p> We gladly accept these orphan books and work hard to find new readers for them. So far, we've kept over 8,000 tons of books out of landfills.</p>
		<img src="images/book_store.jpg" alt="" ></img>
		<img src="images/bb4.jpg" alt="" ></img>
		</div>
		<div id="right">
			<img src="images/books.jpg" alt="library" ></img>	
			<p> &nbsp;&nbsp;&nbsp;<b>Social</b>: Power to the people have even heard horror stories about librarians dumping unwanted tomes down a well at midnight because they couldn't find a good home for them.  
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
