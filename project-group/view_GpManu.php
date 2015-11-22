<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
		<script>
			
		</script>
        
        <script  src="jquery-2.1.3.js"> </script>
	<script type="text/javascript">
	
	function getData(data){
		$("#divData").load("view_lab.php?id="+data);
	}
	</script>
        
	</head>
	<body>
		<table id="pagelayout" align="center"               >
			<tr>
				<td colspan="2" id="pageheader">
<div class="" style="     text-align:center;">
    
    <img src="css/ashesi_banner_2011.png" width="100%" height="auto">

<!--    <i class="fa fa-home">&nbsp; </i><i  class="fa" ><b>Inventory</b></i>-->
                    </div>   				</td>
			</tr>
            
            
			<tr>
				<td id="mainnav">
                    <div id="divMainNav">
                        
<!--
                        <i class="fa" style="    margin:auto;
    height: 9em; background-color:#243546; width: 100%;"> <i class="fa fa-home" style="font-size:30px; padding-top:auto; padding-bottom:auto;"> Inventory</i> 
                        <br><br> Date: Sat Mar 28 <br>User: Daniel Bonsu
                        </i>
-->
                        
                         
                          <a href="view_index.php"><div class="menu"><i class="fa fa-flask">&nbsp; Labs</i></div></a>
                    <a href="searchStaff.php"><div class="menu"><i class="fa fa-group">&nbsp; Staff</i></div></a>
                     <a href="equipment_view_index.php">   <div class="menu"><i class="fa fa-gear">&nbsp; Equipment</i></div></a>
                        <a href="suppliersView.php"><div class="menu"><i class="fa fa-truck">&nbsp; Suppliers</i></div></a>
                        <a href="view_GpManu.php"> <div class="menu"><i class="fa fa-wrench">&nbsp; Manufacturers</i></div></a>
                        </div>
				</td>
				<td id="content">
                    
                    <div id="divPageMenu">
                                    <span class="menuitem" ><i class="fa fa-navicons">&nbsp;</i></span>
                                    <a href="add_GpManu.php" <span class="menuitem" ><i class="fa fa-plus">&nbsp; </i></span></a>
                        <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
                                    <span class="menuitem" ><i class="fa fa-trash">&nbsp; </i></span>
				      <a href="search_GpManu.php">   <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>	</a>	
<!--                                    <input type="text" id="txtSearch" class="searcher"/>-->
                           
					</div>

					<div id="divStatus" class="status">
							 Status Message
					</div>
					<div id="divContent">
					<?php

	include_once("GpManu.php");
	$obj=new gpManu();
	
	
	if(!$obj->getManu()){
		echo"error";
	}
			echo "<table border='1'>";
echo"<tr><td>Manufacturer_ID</td><td>Manufacturer_Name</td><td>Location</td>
<td>Contacts</td><td>Delete</td><td>Edit</td></tr>";
    $row=$obj->fetch();
		while($row){
	    	echo "<tr><td> ".$row['Manufacturer_ID']."</td><td>".$row['Manufacturer_Name']."</td><td>".$row['Manu_location']."</td>
			<td>".$row['Manu_Contact']."</td><td><a href=delete_GpManu.php?id=".$row['Manufacturer_ID'].">delete</a></td>
			<td><a href=update_GpManu.php?id=".$row['Manufacturer_ID'].">edit</a> </td></tr>";
	$row=$obj->fetch();
		}
	


?>
                        
					</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	