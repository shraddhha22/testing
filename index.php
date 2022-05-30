<?php
include("configure.php");
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    
	$sql=mysqli_query($conn,"INSERT INTO `abhi`(`fname`,`lname`) VALUES('$fname','$lname')");
	if($sql==1){	
    //header("location:addnewenquire.php");
	}else{
		echo "<script>alert('Something went wrong');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <button type="submit" name="submit" value="Submit">Submit</button>
      </form> 
</body>
</html>