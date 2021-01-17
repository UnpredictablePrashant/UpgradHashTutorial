<?php
	$hostname="localhost"; //local server name default localhost
	$username="root";  //mysql username default is root.
	$password="";       //blank if no password is set for mysql.
	$database="upgraddemo";  //database name which you created
	
	$con=mysqli_connect($hostname,$username,$password);
	if(! $con){
		die('Connection Failed'.mysql_error());
	}
	mysqli_select_db($con,$database);
    session_start();

	If(isset($_REQUEST['submit'])!=''){
		If($_REQUEST['email']=='' || $_REQUEST['password']==''){
			Echo "please fill the empty field.";
		}
		Else{
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$sql = "SELECT * FROM upgraddemo WHERE email = '$email' and password = md5('$password')";

			$res=mysqli_query($con,$sql);
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
 	        $count = mysqli_num_rows($res);
			if($count == 1) {
				Echo "You have logged in successfully<br>";
				Echo "<br/> Welcome ", $row['name'];
				Echo "<br/>Your password in plain text is: ", $password;
				Echo "<br/>Using MD5() on password: ", md5($password);
				Echo "<br/>Password fetched from database: ", $row['password'];
			}
			else {
				$error = "Your Login Name or Password is invalid<br>";
				Echo $error;
				Echo "<br/>Your password in plain text is: ", $password;
				Echo "<br/>Using MD5() on password: ", md5($password);
			}

		}
	}
?>