
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
    
    <img src="css/ashesi_banner_2011.png" width="100%" height="170%">

                    </div>   				</td>
			</tr>
            
            
			<tr>
				<td id="mainnav">
                    <div id="divMainNav">
                                 
                         
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
                                    <span class="menuitem" ><i class="fa fa-edit">&nbsp; </i></span>
                       		
                                    <input type="text" id="txtSearch" class="searcher"/>
                           
					</div>

					<div id="divStatus" class="status">
							 Status Message
					</div>
					<div id="divContent">						
<?php



if (isset($_REQUEST['id'])){

	$id = $_REQUEST['id'];
	include ("staff.php");
	$obj = new staff();
	$obj->connect();
	$obj->view_staff($id);
	$row = $obj->fetch();
	$first_name = $row["first_name"];
	$last_name = $row["last_name"];
	$staff_id = $row["staff_id"];
}
?>

<form method = "GET" action = "staffedit.php">

<div>
First Name: <input type = "text" name = "st" required size = "30" value=<?php echo '"'.$first_name.'"'?>>
</div>
<br>
<div>
Last Name: <input type = "text" name = "str" required size = "30" value=<?php echo '"'.$last_name.'"'?>>
</div>
<br>
Staff ID: <input type = "text" name = "new_id" required size = "30" value=<?php echo '"'.$staff_id.'"'?>>

<input type="hidden" name="id"required value= <?php echo '"'.$id.'"'?>>

<input type = "submit" value= "Edit">
</form>
<form action = "searchStaff.php"><input type = "submit" value="Home"></form>

<?php
if (isset($_REQUEST['st']) && isset($_REQUEST['new_id'])){
	$fname= $_REQUEST['st'];
	$sname= $_REQUEST['str'];
	$new_id= $_REQUEST['new_id'];
	$id = $_REQUEST['id'];
	
	if ($obj ->edit_staff($id, $fname,$sname,$new_id)){
		echo ("Edited");
	}
}


?>
</form>
</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	