<?php
require "DataBase.php";
$db = new DataBase();
$inf="error";
    if ($db->dbConnect()) {
       $info=$db->getalldata("information");
	   if( $info == $inf){
		   echo"error";
	   }
	   else{
            echo $info;
	   }
        
    } 
	else echo "Error:Database connection";

?>