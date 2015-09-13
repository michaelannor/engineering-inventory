<?php

// define("DB_HOST", 'localhost');
// define("DB_NAME", 'webtech');
// define("DB_PORT", 3306);
// define("DB_USER","root");
// define("DB_PWORD","");

// define("LOG_LEVEL_SEC",0);
// define("LOG_LEVEL_DB_FAIL",0);

// define("PAGE_SIZE",10);

// function log_msg($level, $er_code, $msg, $mysql_msg){
// 	return 0;
// }

include_once ("adb.php");
class GpManu extends adb {
//function GpManu(){
	function addManu($Mid,$Mname,$Loca,$Contacts){
    $str_query= "insert into manufacturer set Manufacturer_ID = '$Mid', Manufacturer_Name = '$Mname', Manu_location = '$Loca', Manu_Contact = '$Contacts'";
    return $this->query($str_query);
    	
	}
	function updateManu($Mid,$Mname,$Loca,$Contacts){
	$str_query= "update manufacturer set Manufacturer_Name = '$Mname' , Manu_location = '$Loca', Manu_Contact = '$Contacts'".
	 "where Manufacturer_ID='$Mid'";
     return $this->query($str_query);	
	}
	
	function deleteManu($Mid){
	$str_query= "delete from manufacturer where Manufacturer_ID = $Mid";
    return $this->query($str_query);
    }
	
	function searchManu($Mname){
	$str_query= "select Manufacturer_ID, Manufacturer_Name from manufacturer where Manufacturer_Name like'%$Mname%'";
    return $this->query($str_query);
  }
   function getManu(){
	$str_query= "select Manufacturer_ID, Manufacturer_Name, Manu_location, Manu_Contact from Manufacturer";
    return $this->query($str_query);
}
	function select ( $manufacturer_id )
	{
		$select_query = "select Manufacturer_ID, Manufacturer_Name, Manu_location,". 
		"Manu_Contact from Manufacturer where Manufacturer_ID='$manufacturer_id'";
		return $this->query ( $select_query );
	}
}
?>

<!-- <html>
<head>
	<title>
		Index-+
	</title>
	<script></script>
</head>  
<body>
	<form action="GpManu.php" method="GET">
		Manufacturer Name :<input type="text" name="nm" size="30">
		<input type = "submit" value -"Add">

		<?php


		// if(isset($_REQUEST['mn'])) {
		// 	include("mmanufacturer.php");
		// 	$name = $_REQUEST['mn'];
		// 	if(!$obj -> addManu($name)){
		// 		echo "Error adding";
		// 	} else {
		// 		echo "Adding $name";
		//	}
           
		//}


		?>
</body>
</html> -->