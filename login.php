<?php
require "config.php";

if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
$pass=$_POST['password'];

$sql= "SELECT * FROM `registration` WHERE uname='$uname' AND password='$pass' ";

$res=mysqli_query($conn,$sql);

if($res){
  $num=mysqli_num_rows($res);

if($num>0){
   $msg="Loged in sucessfully";
}
else{
 $msg= "Ivalid username or password";
}
}

}


  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php
echo $msg;
?>

<div class="container">


   <form action="login.php" method="post">
   	<h3 class="text-align-center">Loging Here </h3>
   	
  <div class="mb-3 mt-5">
    <label  class="form-label">USER NAME</label>
    <input type="Name" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  
  <button name="submit" type="submit" class="btn btn-success mt-4 w-100 ">Log In</button>
</form>
</div >
</body>
</html>

