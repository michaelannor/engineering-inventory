	/**
	*@author Nura Abdul-Rahman <nuraabd4@gmail.com>
	*/
<html>
	
	<head>
	<title>Index</title>
	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
	<script>
			
	</script>
        
        <script  src="jquery-2.1.3.js"> </script>
	<script type="text/javascript">
	/**
        *@method int getData (data)
        *@param  int data data information
        **/
	function getData(data){
		$("#divData").load("equipment_view_index.php?id="+data);
	}
	</script>
	</head>
	/** coming up with page layout for user interface which includes an image
	 being inserted, font style and menu icons
	**/
	<body>

	<table id="pagelayout" align="center"               >
			<tr>
				<td colspan="2" id="pageheader">
	<div class="" style="     text-align:center;">
    
       <img src="css/ashesi_banner_2011.png" width="100%" height="auto">

	<!--    <i class="fa fa-home">&nbsp; </i><i  class="fa" ><b>Inventory</b></i>-->
        </div>  </td>
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
                             
        /** menu icons for each function 
	**/  
                         
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
       <span class="menuitem" ><i class="fa fa-plus">&nbsp; </i></span>
       <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
       <span class="menuitem" ><i class="fa fa-trash">&nbsp; </i></sp
       <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>
       <input type="text" id="txtSearch" class="searcher"/>						 
                                 
        </div>
	/** displays current status message
	**/				
	<div id="divStatus" class="status">
	Status Message

	</div>
	<div style=height:15px>
	</div>
		<br><br>
	<div class="container">
	<center><h2> Add Equipment </h2></center>
	<form method="post" action="addEquipment.php" role="form">
	<br>
	
	<div class="form-group"><label for="equipment">Equipment Name </label><input type="text" name="nm" class="form-control" placeholder="Enter Equipment Name" size="10" required></div>
	<div class="form-group"><label for="id"> Equipment ID</label><input type="text" name="tp" class="form-control" placeholder="Enter Equipment ID" size="10" required></div>
	<div class="form-group"><label for="manufacturer"> Manufacturer Name</label><input type="text" name="dc" class="form-control" placeholder="Enter Manufacturer Name" size="10" required></div>
	<div class="form-group"><label for="supplier"> Supplier Name </label><input type="text" name="pr" class="form-control" placeholder="Enter Supplier Name" size="10" required></div>
	<div class="form-group"><label for="lab">LabID</label><input type="text" name="lb" class="form-control" placeholder="Enter Lab ID" size="10" required></div>
	<div class="form-group"><label for="safety"> Safety Requirement</label><input type="text" name="sf" class="form-control" placeholder="Enter Safety Requirement" size="10" required></div>
	<div><input type="submit" name="submit" value="Add Equipment"></div>
	
	</form>
	</div>
	/** includes equipment class to make use of add equipment function
	**/
	<?php
	
	if(isset($_REQUEST['nm'])){
	include_once("equipment.php");
	$obj=new equipment();
	$name=$_REQUEST['nm'];
	$id=$_REQUEST['tp'];
	$manufacturer=$_REQUEST['dc'];
	$supplier=$_REQUEST['pr'];
	$lab_id=$_REQUEST['lb'];
	$safety_requirement=$_REQUEST['sf'];
	
	if(!$obj->add_equipment($name,$id,$manufacturer,$supplier,$lab_id,$safety_requirement)){
		echo "Error adding";
	}
	else{
		echo "Added $name to equipment";
	}
	}
	?>
	
	<form action="equipment_view_index.php"><input type="submit" value ="Back to Home">
	<div style=height:15px>
	</div>
	</form>
	</body>
</html>