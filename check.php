<?php
 
 require "config.php";

 if(isset($_POST["uname"])){
 	$uname=$_POST["uname"];

 	$sql= "SELECT * FROM `registration` WHERE uname='$uname'  ";

 	$res=mysqli_query($conn,$sql);
 	if(mysqli_num_rows($res)>0){
 		echo '<span class="text-danger">Not available  </span';
 	}
 	else{
 		echo '<span class="text-success">YEs  </span';
 	}
 }
?>