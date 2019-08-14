<?php
include "crud.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
First Name<input type="text" name="fname"></br>
Last Name<input type="text" name="lname"></br>
<input type="submit" name="btn_sub">
<a href="index.php">Return Back!</a>
</form>
</body>
</html>


<?php 
 $crud=new crud();
if(isset($_POST['btn_sub']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $result=$crud->execute($fname,$lname);
	echo "<font color='green'>Data added successfully.";
}

?>