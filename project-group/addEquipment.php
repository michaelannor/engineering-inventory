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
		$("#divData").load("equipment_view_index.php?id="+data);
	}
	</script>
	</head>
	
<body>
//Done
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
                                    <span class="menuitem" ><i class="fa fa-plus">&nbsp; </i></span>
                        <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
                                    <span class="menuitem" ><i class="fa fa-trash">&nbsp; </i></span>
				         <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>
                          <input type="text" id="txtSearch" class="searcher"/>						 
                                 
                           </div>
					
					<div id="divStatus" class="status">
							 Status Message

					</div>
					<div style=height:15px>
					</div>
					<div id="divContent">
<body>
	<br><br>
<form method="get" action="addEquipment.php">
	<br>
	<center><div><input type="text" name="nm" placeholder="Enter Equipment Name" size="30" required></div><br> 
	<center><div><input type="text" name="tp" placeholder="Enter Time Purchased" size="30" required></div><br>
	<center><div><input type="text" name="dc" placeholder="Enter Description" size="30" required></div><br>
	<center><div><input type="text" name="pr" placeholder="Enter Price" size="30" required></div><br>
	<div><input type="submit" name="submit" value="Add Equipment"></div><br></center>
</form>
<?php
if(isset($_REQUEST['nm'])){
	include_once("equipment.php");
	$obj=new equipment();
	$name=$_REQUEST['nm'];
	$time_purchased=$_REQUEST['tp'];
	$description=$_REQUEST['dc'];
	$price=$_REQUEST['pr'];
	if(!$obj->add_equipment($name,$time_purchased,$description,$price)){
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