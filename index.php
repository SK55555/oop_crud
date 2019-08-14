<?php 
include "crud.php";
$crud=new crud();
$result=$crud->getdata();


if(isset($_GET['id']))
{
	$id=$_GET['id'];
    $result_del=$crud->delete_data($id);
	echo "<font color='green'>Data Delete successfully.";
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Action</th>

		<tbody>

            <?php foreach ($result as $key => $res) { ?>
			<tr>
				<td><?php echo $res['fname']; ?></td>
				<td><?php echo $res['lname']; ?></td>

				<td><a href="add.php">Add</a> | <a href="edit.php?id=<?php echo $res['id']; ?>">Edit</a> | <a href="index.php?id=<?php echo $res['id']; ?>">Delete</a></td>
			</tr>
		<?php 	} ?>
		</tbody>
	</table>


</body>
</html>