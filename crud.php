<?php 

include "DbConfig.php";

/**
 * Crud Operation
 */
class Crud extends DbConfig
{
	
	public function __construct()
	{
		 parent::__construct();
	}
 
   public function execute($firstname,$lastname)
   {

   	$sql="INSERT INTO `crud_tb`(`fname`, `lname`) VALUES ('$firstname','$lastname')";

   	$result=$this->connection->query($sql);
	    if($result==false)
	   	{
	   	echo "Error cannot execute the command";
	   	return false;
	   	}
	   	else
	   	{
	   	return true;
	   	}
	}


	public function getdata()
    {
        $sql_get="SELECT * FROM `crud_tb`";
        $result_get=$this->connection->query($sql_get);

        if($result_get==false)
        {
        	return false;
        }
        $rows=array();

        while ($row =$result_get->fetch_assoc()) {
        	$rows[]=$row;
        }
        return $rows;

	}


	public function get_editdata($id)
    {
        $sql_get="SELECT * FROM `crud_tb` WHERE `id`=$id;";
        $result_get=$this->connection->query($sql_get);

        if($result_get==false)
        {
        	return false;
        }
        $rows=array();

        while ($row =$result_get->fetch_assoc()) {
        	$rows[]=$row;
        }
        return $rows;
    }


    public function edit_post_data($firstname,$lastname,$id)
    {
    	$sql="UPDATE `crud_tb` SET `fname`='$firstname',`lname`='$lastname' WHERE `id`='$id'";

    	$result=$this->connection->query($sql);

    	if($result==false)
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}
    }

    public function delete_data($id)
    {
    	$sql="DELETE FROM `crud_tb` WHERE `id`='$id'";

    	$result=$this->connection->query($sql);

    	if($result==false)
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}
    }




}


?>