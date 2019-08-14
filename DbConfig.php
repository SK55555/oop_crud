<?php 

class DbConfig
{
  private $host='localhost';
  private $username='root';
  private $password='';
  private $database='probsol_db';
  
  protected $connection;


  public function __construct()
  {
  	 if(!isset($this->connection))
  	 {
  	 	$this->connection=new mysqli($this->host,$this->username,$this->password,$this->database);

  	 	if(!$this->connection)
  	 	{
  	 		echo "Cannot Connect";
  	 		exit();
  	 	}

  	 }

  	 return $this->connection;
  }

}



?>