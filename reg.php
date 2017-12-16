<html>
	<head>
		<link href="tst.css" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="images/b.ico">
		<title> Register </title>
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
				<p> <a href="login.php">Sign In</a></p>
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
					<h2 align="center">Registration form</h2><br/>
				<form action="signup.php" enctype="multipart/form-data" method="post">
            <table id="pra">
              <tr>
                <td> First Name: </td>
                 <td> <input name="fname" type="text"  autofocus required /></td>
				</tr>
				<tr>
                  <td>Last Name:</td> 
                 <td> <input name="lname" type="text"required  /></td>
				</tr>               
             
                <tr> 
				<td> Password:</td>
                  <td><input name="pass" type="password" required autocomplete="off"/></td>
                 </tr>
				 </tr>
                <tr> 
				<td> Confirm Password:</td>
                  <td><input name="cpass" type="password" required autocomplete="off"/></td>
                 </tr>
              <tr>
                <td> Gender :</td>
                 <td><input name="gen" type="radio" value="male" required />Male  
		
					<input name="gen" type="radio" value="female" required />Female
				 </td>
			</tr>
                <tr><td> DOB : </td>
                 <td> <input type="date" name="dob" required /></td>
				</tr>
                
        
              <tr>
                <td> Address:</td>
                <td>  <textarea name="add" rows="5" columns="10"  ></textarea></td>
			</tr>
			<tr><td> Postal code: </td>
                 <td> <input name="pin" type="text" maxlength="6"  required /></td>
 
              </tr>
                <tr><td> Phno: </td>
                 <td> <input name="phone" type="text"   maxlength="12" required  /></td>
 
              </tr>
              
				 <tr>
                 <td>Email_Id :</td>
                 <td> <input name="email" type="email" required autocomplete="off"/></td>
                 
              </tr>
			    <tr></tr><tr><tr></tr><tr></tr>
             <tr>
                 <td></td><td align="center"> <input type="submit" name="submit" value="Save" />
                
                 <input type="reset" name="Reset" /></td>
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
