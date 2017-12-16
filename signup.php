<?php 
require("includes/connection.php");
function NewUser() { 
	 $fname = preg_replace('/[^A-Za-z]/', '', $_POST['fname']);
	 $lname = preg_replace('/[^A-Za-z]/', '', $_POST['lname']); 
	 $email = $_POST['email']; 
	 $phone = $_POST['phone']; 
	 $cpassword = $_POST['cpass']; 
	 $password = $_POST['pass']; 
	 $gender = $_POST['gen']; 
	 $dob = $_POST['dob'];
	 $address = $_POST['add']; 
	 $pincode = $_POST['pin']; 	 
	 if($password == $cpassword)
	{
	 $query = "INSERT INTO user(fname,lname,email,phone,password,gender,dob,address,pincode) VALUES ('$fname','$lname','$email','$phone','$password','$gender','$dob','$address','$pincode')";
	 $data = mysql_query ($query)or die(mysql_error()); 
	 if($data) { 
	 echo "<SCRIPT LANGUAGE='JavaScript'>
 			 alert('Registration successfull ');
        	 window.location.href='index.php';
         </SCRIPT>";
	 } 
	 else{
	 echo "REGISTRATION FAILED, GO BACK TO REGISTER AGAIN";
	 }
	 }
	 else{
		echo "PASSWORDS DOESN'T MATCH,GO BACK TO CHANGE PASSWORD";
		
	 }
 } 
 function SignUp() {
	
 if(!empty($_POST['email'])) 
 {
 $query = mysql_query("SELECT * FROM user WHERE email = '$_POST[email]'");
 if(!$row = mysql_fetch_array($query))
 {
 newuser();
 } 
 else { 
 echo "SORRY...YOU ARE ALREADY REGISTERED USER... CLICK <a href='login.php' ><i><b style=\"color:crimson\">HERE </b></i></a>TO GET BACK TO LOGIN "; 
 } 
 } 
 } 
 if(isset($_POST['submit']))
 { 
 SignUp(); 
 } 
 ?>