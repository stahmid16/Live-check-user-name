<?php
require "config.php";

if(isset($_POST['submit'])){


$uname=$_POST['uname'];
$pass=$_POST['password'];


$sql= "SELECT * FROM registration WHERE uname='$uname' ";
$res=mysqli_query($conn,$sql);

if($res){
	$num=mysqli_num_rows($res);
	if($num>0){
         $msg ="already exist";
	}
	else{

		$sql= "INSERT INTO `registration` (uname,password ) VALUES ('$uname','$pass') ";

$res= mysqli_query($conn,$sql);


if($res){
	$msg= "Sucess";
}
else{
	die(mysqli_error($conn));
}

}
	}
}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script src="jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<?php
echo $msg;
?>

<div class="container">


   <form action="reg.php" method="post">
   	<h3 class="text-align-center">Registration Here </h3>
   	
  <div class="mb-3 mt-5">
    <label  class="form-label">USER NAME</label>
    <input type="text" name="uname" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span id="avialable"></span>
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  
  <button name="submit" type="submit" class="btn btn-success mt-4 w-100 ">Submit</button>
 <a href="login.php"> <h1>Already register clicl for login </h1> </a>
</form>
</div >

<script type="text/javascript">
  
  $(document).ready(function(){
       $('#name').blur(function(){
        var uname =$(this).val(); 
        $.ajax({
          url:"check.php",
          data:{uname:uname},
          method: "POST",
          dataType:"text",
          success:function(html){

            $('#avialable').html(html);
          }

        });

       });
  } );
</script>


</body>
</html>