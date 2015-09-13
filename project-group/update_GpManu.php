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
				         <span class="menuitem" id="searcher"><i class="fa fa-search">&nbsp; search</i></span>		
                                    <input type="text" id="txtSearch" class="searcher"/>
                           
					</div>

					<div id="divStatus" class="status">
							 Status Message
					</div>
					<div id="divContent">
					
					
					
			<?php 

	if(isset($_REQUEST['id'])) 
	{
		include_once("GpManu.php");
		$obj = new GpManu();

		$manufacturer_id = $_REQUEST [ 'id' ];
		$obj->select ( $manufacturer_id );
		$row = $obj->fetch();
	}

?>
<form action="update_GpManu.php" method="GET">
		Manufacturer ID :<input type="text" name="m_id" value="<?php echo $row['Manufacturer_ID'] ?>"> <br>		
		Manufacturer Name :<input type="text" name="mn" size="30" value="<?php echo $row['Manufacturer_Name'] ?>"> <br>
		Manufacterer Location :<input type="text" name="ln" size="30" value="<?php echo $row['Manu_location'] ?>"> <br>
		Manufacterer Contacts :<input type="text" name="Ct" size="30" value="<?php echo $row['Manu_Contact'] ?>">
	    <input id="button" name="button" type = "submit" value ="Update">
	    <!-- <button id="button" type="button" class="button">Update</button> -->
</form>
		<?php
		if(isset($_REQUEST['button'])) {
			echo "in php";
			include_once("GpManu.php");
			$obj = new GpManu();

			$Mid = $_REQUEST['m_id'];
			$Mname = $_REQUEST['mn'];
			$loca = $_REQUEST['ln'];
			$Contacts = $_REQUEST['Ct'];

			if(!$obj -> updateManu($Mid,$Mname,$loca,$Contacts)){
				echo "Error updating";
			} else {
				echo "Updating $Mname";
				header ( "Location: update_GpManu.php?id=$Mid" );
				
				
			}
           echo "end of php";
		}
		?>
                
                      
					</div>
				</td>
			</tr>
   
		</table>
	</body>
</html>	