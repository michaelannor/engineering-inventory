<html>

<head>
	<title>
		Index
	</title>                      
	<link rel="stylesheet" href="css/style.css">
	<script></script>
</head>  
<body align="center" style = "background-color:yellow">
	<form action="add_GpManu.php" method="GET" style >
	    Manufacturer ID :<input type="text" name="id" size="30"><br>
		Manufacturer Name :<input type="text" name="mn" size="30"><br>
		Manufacterer Location :<input type="text" name="ln" size="30"><br>
		Manufacterer Contacts :<input type="text" name="Ct" size="30"><br>
	    <input type = "submit" value ="Add">
</form>
		<?php
        
		if(isset($_REQUEST['mn'])) {
			include_once("GpManu.php");
			$obj = new GpManu();
			$Mid = $_REQUEST['id'];
			$Mname = $_REQUEST['mn'];
			$Loca = $_REQUEST['ln'];
			$Contacts = $_REQUEST['Ct'];
			if(!$obj -> addManu($Mid,$Mname,$Loca,$Contacts)){
				echo "Error adding".mysql_error();
			} else {
				echo "Adding $Mname";
			}
           
		}
		?>
</body>
</html>



