<?php
	session_start();
	include	'../../db.php';
	$id=$_SESSION['id'];
	$sql="SELECT  *  FROM user WHERE id='$id'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$name=$row['name'];
	$email=$row['email'];
	if(isset($_POST["submit"])){
		$pname=rand(1000,10000)."-".$_FILES["file"]["name"];
		$tname=$_FILES["file"]["tmp_name"];
		$uploads='uploads/';
		move_uploaded_file($tname,$uploads.$pname);
		$sql="INSERT INTO file_upload(userId,name,email,file_name)VALUE('$id','$name','$email','$pname')"; 
		$result=mysqli_query($con,$sql);
		if($result==true){
			header('location: ../upload_file.php?ins=1');
		} 
		else {
			header('location: ../upload_file.php?error=0');	
		}
	}
	
?>