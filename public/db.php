<?php
	session_start();
  $con=new mysqli('localhost','root','','sfscuhc');
  if($con==false){
	 echo "connection failed";  
  }
?>