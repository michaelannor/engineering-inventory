		<html>
			<head>
				<title>Index</title>
				<link rel="stylesheet" href="css/style.css">
		        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
		        
		        <script  src="jquery-2.1.3.js"> </script>
			<script type="text/javascript">
		
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
		                                    
		                           
							</div>

							<div id="divStatus" class="status">
									 Status Message
							</div>
							<div id="divContent">

		<form method="get"  action = "staffadd.php" >
	<div>
		First Name: <input type = "text" name = "st" required size = "30">
	</div>
	<br>
	<div>
		Last Name: <input type = "text" name = "str"  requiredsize = "30">
	</div>
	<br>
		Staff ID: <input type = "text" name = "id" required size = "30">

	<div>
		<input type = "submit" value= "Add">
	</div>
	<br>
		</form>
		<form action = "searchStaff.php"><input type = "submit" value="Home"></form>

		<?php


		if (isset($_REQUEST['st'])){

			include ("staff.php");
			$obj = new staff();
			$obj->connect();
			$fname= $_REQUEST['st'];
			$lname= $_REQUEST['str'];
			$id= $_REQUEST['id'];
			
			if($obj->add_staff($fname ,$lname, $id)){
				echo ("Added");
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