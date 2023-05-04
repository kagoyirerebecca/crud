<?php
class database{
	private $dbserver="localhost";
	private $dbuser="root";
	private $dbpassword="";
	private $dbname="userdata";
	protected $conn;
	public function __construct(){
		try{
			$conn="mysql:host={$this->dbserver} ; dbname={$this->dbname};
				charset=utf-8";
				$options=array(PDO::ATTR_PERSISTENT);
				$this->conn=new PDO($conn,$this->dbuser,
					$this->dbpassword,$options);
		} catch(PDOException $e){
			echo "connection error".$e->getMessage();
		}
	}
}
?>