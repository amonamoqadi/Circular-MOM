<?php
require "DataBaseConfig.php";

class DataBase
{
    public $connect;
    public $data;
    private $sql;
    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct()
    {
        $this->connect = null;
        $this->data = null;
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->servername = $dbc->servername;
        $this->username = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
    }

    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        return $this->connect;
    }

  
	  function getalldata($table){
	
	   
         $this->sql = "select * from information" ;
        $result = mysqli_query($this->connect, $this->sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) != 0) {
         
		    $dblatitude = $row['latt'];
                   $dblongitude = $row['lng'];
			$dbdate = $row['date'];
			

            $c=$dblatitude.",".$dblongitude.",";
			
			return $c.$dbdate ; 

	  }
	  
	   return "error";
	  }

}

?>
