<?php 
	$hostname="localhost";
	$username="root"; 
	$password="";     
	$database="upgraddemo";  
	
	$con=mysqli_connect($hostname,$username,$password);
	if(! $con){
		die('Connection Failed'.mysql_error());
	}
	mysqli_select_db($con,$database);
	If(isset($_REQUEST['submit'])!=''){
		If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''){
			Echo "please fill the empty field.";
		}
		Else{
			$sql="insert into upgraddemo(name,email,password) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".md5($_REQUEST['password'])."')";
			$res=mysqli_query($con,$sql);
			
			If($res){
				Echo "Record successfully inserted. <br/> Visit <a href='login.html'>Login</a> <br/>";
				Echo "Password: ", $_REQUEST['password'];
				Echo "<br/>Password in hash: ", md5($_REQUEST['password']);
			}
			Else{
				Echo "There is some problem in inserting record";
			}
		}
	}
?>