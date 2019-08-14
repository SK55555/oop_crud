<?php
include "crud.php";

$crud=new crud();

$id=$_GET['id'];

$result=$crud->get_editdata($id);

foreach ($result as  $res) {
  $fname=$res['fname'];
  $lname=$res['lname'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
First Name<input type="text" name="ed_fname" value="<?php echo $fname; ?>"></br>
Last Name<input type="text" name="ed_lname" value="<?php echo $lname; ?>"></br>
<input type="submit" name="btn_edsub">

</form>
</body>
</html>


<?php 
 $crud=new crud();
if(isset($_POST['btn_edsub']))
{
	$fname=$_POST['ed_fname'];
	$lname=$_POST['ed_lname'];
    $result=$crud->edit_post_data($fname,$lname,$id);
	echo "<font color='green'>Data Update successfully.";
	
}

?>